# CHANGELOG

## Version History

### 1. Drupal 11.1.7 Pre QA Testing (May 2025)
- **Commit:** d889f6f1c
- **Description:** Major version upgrade to Drupal 11.1.7, including comprehensive updates to core files and dependencies.
- **Key Changes:**
  - Significant updates to Drupal core components and libraries
  - Updated dependencies to be compatible with Drupal 11.x
  - Added extensive core theme files for improved stability and performance
  - Pre-release testing phase initiated for quality assurance

### 2. SES/SMTP Email Integration (May 2025)
- **Commit:** e116c7eae
- **Description:** Added SMTP module integration with AWS SES (Simple Email Service) for improved email delivery.
- **Key Changes:**
  - Added drupal/smtp module (version 1.4.0)
  - Configured connection to AWS SES service
  - Enhanced email deliverability monitoring
  - Replaced previous email handling system

### 3. Docker Configuration Optimization (May 2025)
- **Commit:** 977434d0d
- **Description:** Separated local Docker configuration from production files to improve development workflow.
- **Key Changes:**
  - Updated Dockerfile.deployed for production environments
  - Reduced core docker-compose.yml to essential production settings
  - Created docker-compose.override.yml for local development
  - Isolated local configuration changes from production deployment

### 4. Fresh Drupal 11.1.7 Upgrade (May 2025)
- **Commit:** 0e6d2cca0
- **Description:** Complete upgrade of the Drupal core to version 11.1.7.
- **Key Changes:**
  - Updated core dependencies including:
    - Symfony components upgraded from v6.x to v7.2.x
    - PHP requirement updated to 8.2+
    - Removed older polyfills no longer needed
  - Modernized dependency structure
  - Enhanced security and performance

### 5. Theme Migration: Bartik to Olivero (April 2025)
- **Commit:** 8fbeb031c
- **Description:** Initiated migration from Bartik to Olivero theme for improved modern design.
- **Key Changes:**
  - Changed base theme from Bartik to Olivero in theme configuration
  - Updated templates for compatibility with Olivero
  - Restructured theme regions to match Olivero layout
  - Modified CSS for seamless transition
  - Adjusted site branding elements

### 6. Alert Banners Enhancement (February 2025)
- **Commit:** 4800a5f16
- **Description:** Improved the alert banners system with updated styling and icons.
- **Key Changes:**
  - Added Font Awesome integration for alert icons
  - Enhanced alert styling with better colors and accessibility
  - Updated templates for consistent alert display
  - Added specific color variables for different alert types
  - Improved responsive design for alerts

### 7. Captcha Image Refresh Fix (April 2025)
- **Commit:** f2afcd22d
- **Description:** Applied patch to fix CAPTCHA image refresh functionality for improved security and user experience.
- **Key Changes:**
  - Added patch for the CAPTCHA module
  - Fixed image refresh issue that caused validation problems
  - Updated JavaScript handling for CAPTCHA refresh
  - Enhanced security for form submissions

### 8. Grid Views Template Fix (April 2025)
- **Commit:** 08a4ebc0d
- **Description:** Added custom grid views template to address issues with the default Olivero grid view.
- **Key Changes:**
  - Added custom template for grid view display
  - Fixed layout issues in the default Olivero grid implementation
  - Improved responsive behavior for grid layouts
  - Enhanced visual consistency across grid views

### 9. AWS CloudFormation Update (March 2025)
- **Commit:** 1425f94fc
- **Description:** Modified AWS CloudFormation template to use standard FARGATE instead of FARGATE_SPOT for improved reliability.
- **Key Changes:**
  - Changed capacity provider from FARGATE_SPOT to FARGATE
  - Enhanced service reliability by using dedicated resources
  - Reduced potential for container interruptions
  - Optimized AWS ECS configuration for production stability

### 10. Security Module Update (January 2025)
- **Commit:** e5cf8e7e3
- **Description:** Rollback of seckit module to version 2.0.1 due to compatibility issues.
- **Key Changes:**
  - Reverted seckit module from newer version to 2.0.1
  - Addressed compatibility issues with other security modules
  - Maintained security compliance requirements
  - Fixed regressions introduced in newer seckit version

## Additional Notable Changes

- Update to contributed modules (83b522a36) - Updated modules to latest versions compatible with Drupal core
- Countdown timer implementation (e437b4bf4) - Added countdown functionality for time-sensitive content
- Webforms styling and functionality enhancements (f1e0b53d6) - Improved form titles and user experience 