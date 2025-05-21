#!/bin/bash

echo "=== System Information ==="
hostname
pwd
whoami

echo -e "\n=== Container Environment ==="
env | grep -E 'PATH|HOME|USER|HOST'

echo -e "\n=== Drupal Files Directory ==="
ls -la /opt/drupal/web/sites/default/files/

echo -e "\n=== File Permissions ==="
stat /opt/drupal/web/sites/default/files/

echo -e "\n=== Mount Points ==="
mount | grep drupal

echo -e "\n=== Directory Structure ==="
tree -L 3 /opt/drupal/web/sites/default/
