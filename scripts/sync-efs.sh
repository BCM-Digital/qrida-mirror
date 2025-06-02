#!/bin/bash

# Load environment variables from .env if present
[ -f .env ] && source .env

SRC_ENV=${1:-dev}
DST_ENV=${2:-local}

SRC_VAR="EFS_${SRC_ENV^^}_PATH"
DST_VAR="EFS_${DST_ENV^^}_PATH"

SRC_PATH=${!SRC_VAR}
DST_PATH=${!DST_VAR}

if [ -z "$SRC_PATH" ] || [ -z "$DST_PATH" ]; then
  echo "Source or destination path not set" >&2
  exit 1
fi

echo "Syncing files from $SRC_PATH to $DST_PATH"
rsync -avh --delete "$SRC_PATH"/ "$DST_PATH"/
