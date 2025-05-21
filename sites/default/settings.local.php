<?php
/**
 * @file
 * Put local development settings here.
 *
 * Databases, environment specific settings, and overrides should go in this file.
 */

/**
 * Enable development settings, which include turning off twig caching, and
 * enabling twig debug mode.
 */
$settings['container_yamls'][] = __DIR__ . '/development.services.yml';
$databases['default']['default'] = [
  'driver' => 'mysql',
  'host' => 'db',
  'database' => 'qrida',
  'username' => 'root',
  'password' => 'my-secret-pw',
];
/**
 * More local development settings.  Disable CSS/JS aggregation,
 * and disable the render cache.
 *
 * This will make your site pretty slow.
 */
$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;
$settings['hash_salt'] = 'gQp3tSlY8JwERVvUyzbQsSE5XfCpBqe7Zm4x3NY9qU1q5yDJW9t6PgY8VLWAOtu89yg4_e31Tw';
