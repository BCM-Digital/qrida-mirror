#!/bin/bash

FILES_DIR="/opt/drupal/web/sites/default/files"

# Debug info
echo "Current location: $(pwd)"
echo "Checking if directory exists..."
ls -la /opt/drupal/web/sites/default/

echo "Attempting to fix permissions..."
docker-compose exec drupal bash -c "
  if [ ! -d '$FILES_DIR' ]; then
    echo 'Creating directory $FILES_DIR'
    mkdir -p '$FILES_DIR'
  fi
  
  echo 'Setting ownership and permissions for $FILES_DIR'
  chown -R www-data:www-data '$FILES_DIR'
  find '$FILES_DIR' -type d -exec chmod 775 {} \;
  find '$FILES_DIR' -type f -exec chmod 664 {} \;
"

echo "Permission update completed"
