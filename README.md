# QRIDA CMS

## Project Overview

The QRIDA (Queensland Rural and Industry Development Authority) website is a content management system (CMS) built on Drupal. It provides information, services, and program management for Queensland's rural and industry development initiatives. The site is designed for scalability, security, and ease of content management by QRIDA staff.

**Tech Stack:**
- [Drupal 10/11](https://www.drupal.org/) (PHP CMS)
- Docker (for local development and containerization)
- Bitbucket Pipelines (CI/CD)

## How the Website Works

- **Drupal CMS**: The site is powered by Drupal, using a mix of core, contributed, and custom modules and themes.
- **Key Modules**: Includes modules for accessibility, security, forms (Webform), content moderation, email (SMTP/SES), analytics, and more (see `composer.json`).
- **Content Management**: Editors manage content via the Drupal admin interface. Content types, blocks, and views are used to structure and display information.
- **Customizations**: Custom modules and themes are located in `web/modules/custom` and `web/themes/custom`.

## AWS Configuration

The site is deployed on AWS using a modern, scalable architecture:
- **ECS (Elastic Container Service)**: Runs the Drupal application in Docker containers.
- **Aurora (RDS)**: Managed MySQL-compatible database for content storage.
- **EFS (Elastic File System)**: Shared file storage for Drupal's files directory.
- **CloudFormation**: Infrastructure as code templates in `.deploy/` (see `bcm_app_cloudformation.yml`).
- **Bitbucket Pipelines**: CI/CD pipeline builds Docker images, pushes to ECR, and triggers deployments.
- **Environment Variables**: Sensitive data (DB credentials, SMTP, etc.) are managed via AWS Secrets Manager or environment variables.

### Local environment file

Copy `.env.example` to `.env` and adjust values for your local setup. The helper scripts (e.g., `sync-efs.sh` and `import-db.sh`) automatically load this file so you don't need to hard‑code paths or credentials in the scripts.

## Patching and Upgrade Process

- **Patching**: Managed via [composer-patches](https://github.com/cweagans/composer-patches). Patches are listed in `composer.json` under `extra.patches` and in module-specific `PATCHES.txt` files.
    - To apply a patch: run `composer install` or `composer update`.
    - To revert a patch: remove it from `composer.json` and re-run composer.
- **Upgrades**:
    - **Drupal Core & Modules**: Use Composer (`composer update drupal/core --with-all-dependencies`).
    - **Database Updates**: After code updates, run `/update.php` or `drush updb` to apply database schema changes.
    - **Recent Work**: Recent commits include SMTP/SES integration, module upgrades, and security patches.

## Local Development & Running the Project

- **Requirements**: Docker, Docker Compose, and (optionally) PowerShell for `run-local.ps1`.
- **Start Locally**:
    1. Clone the repo.
    2. Run `./run-local.ps1` (Windows/PowerShell) or `docker-compose up --build` (manual).
    3. Access the site at [http://localhost:8888](http://localhost:8888).
- **Local Settings**: Copy `web/sites/example.settings.local.php` to `web/sites/default/settings.local.php` and adjust as needed.

- **Sync Files**: Use `scripts/sync-efs.sh` to copy media between EFS volumes for local development.
## Maintenance & Management

- **Regular Tasks**:
    - Update modules and core with Composer.
    - Run database updates (`/update.php` or `drush updb`).
    - Clear cache (`drush cr`).
    - Review security updates and apply patches as needed.
    - Back up database and files regularly (see `backup_migrate` module).
- **Security**:
    - Use modules like `login_security`, `seckit`, and `captcha` for enhanced protection.
    - Review user permissions and roles regularly.
- **Maintenance Mode**: Enable via Drupal admin or Drush (`drush sset system.maintenance_mode 1`).

## Recent Work & Commit History

- **Recent Upgrades**: SMTP/SES integration, module and core updates, security patches.
- **Tracking Changes**: Use `git log` and commit messages for a history of changes. Major upgrades and patches should be documented in this README or a `CHANGELOG.md`.

## Additional Resources

- [Drupal User Guide](https://www.drupal.org/docs/user_guide/en/index.html)
- [Drupal Update & Upgrade Guide](https://www.drupal.org/docs/updating-drupal)
- [AWS Documentation](https://docs.aws.amazon.com/)
- [Composer](https://getcomposer.org/)
- [Docker](https://docs.docker.com/)

---

For any questions or issues, please contact the QRIDA digital team or your technical lead. 