#!/bin/bash
set -e

# If the DB data file does not exist, assume the DB is not yet initialized
if [ ! -f /var/lib/mysql/ibdata1 ]; then
  echo "Database not initialized. Importing dump..."
  gunzip -c /docker-entrypoint-initdb.d/qrida_2024-10-29-12_21.sql.gz | mysql -uroot -pmy-secret-pw qrida
  echo "Database import completed."
fi

# Execute the original entrypoint command(s)
exec docker-entrypoint.sh mysqld
