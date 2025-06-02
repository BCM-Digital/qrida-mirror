#!/bin/bash

# Load environment variables from .env if it exists
[ -f .env ] && source .env

# Path to your database dump file.
DB_DUMP="${DB_DUMP:-./databases/qrida_2024-10-29-12_21.sql.gz}"
DB_USERNAME="${DB_USERNAME:-root}"
DB_PASSWORD="${DB_PASSWORD:-my-secret-pw}"
DB_DATABASE="${DB_DATABASE:-qrida}"

if [ ! -f "$DB_DUMP" ]; then
  echo "Database dump file not found at $DB_DUMP"
  exit 1
fi

echo "Waiting for the database to be ready..."
until docker-compose exec -T db mysqladmin ping -u$DB_USERNAME -p$DB_PASSWORD --silent; do
  echo "Database is not ready; retrying in 5 seconds..."
  sleep 5
done

echo "Importing database dump into the local database..."
gunzip -c "$DB_DUMP" | docker-compose exec -T db mysql -u$DB_USERNAME -p$DB_PASSWORD $DB_DATABASE

echo "Database import completed."
