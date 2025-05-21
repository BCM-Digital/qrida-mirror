#!/bin/bash

# Path to your database dump file.
DB_DUMP="./databases/qrida_2024-10-29-12_21.sql.gz"

if [ ! -f "$DB_DUMP" ]; then
  echo "Database dump file not found at $DB_DUMP"
  exit 1
fi

echo "Waiting for the database to be ready..."
until docker-compose exec -T db mysqladmin ping -uroot -pmy-secret-pw --silent; do
  echo "Database is not ready; retrying in 5 seconds..."
  sleep 5
done

echo "Importing database dump into the local database..."
gunzip -c "$DB_DUMP" | docker-compose exec -T db mysql -uroot -pmy-secret-pw qrida

echo "Database import completed."
