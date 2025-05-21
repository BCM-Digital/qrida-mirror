#!/bin/bash

# Define S3 bucket and paths
S3_BUCKET="qridafiles"
S3_PATH="s3fs-public/"
LOCAL_PATH="/Users/ddoonan/Local Sites/qrida-files/"
AWS_REGION="ap-southeast-2"

# Ensure the local directory exists
mkdir -p "$LOCAL_PATH"

# Set AWS region
export AWS_DEFAULT_REGION=$AWS_REGION

echo "Listing bucket contents..."
aws s3 ls "s3://$S3_BUCKET/$S3_PATH" --debug
# Uncomment the following line if your bucket is public:
# aws s3 ls "s3://$S3_BUCKET/$S3_PATH" --no-sign-request --debug

echo "Starting sync from s3://$S3_BUCKET/$S3_PATH"
echo "Local path: $LOCAL_PATH"
aws s3 sync "s3://$S3_BUCKET/$S3_PATH" "$LOCAL_PATH" --delete --debug
# If the bucket is public, add: --no-sign-request

if [ $? -ne 0 ]; then
  echo "Error: S3 sync failed"
  exit 1
fi

echo "Sync completed. Listing local files:"
ls -al "$LOCAL_PATH"