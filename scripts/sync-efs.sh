#!/bin/bash

# Load environment variables from .env if present
[ -f .env ] && source .env

usage() {
  echo "Usage: $0 <source_env> <dest_env>"
  echo "Environments: local, dev, stage, prod"
  exit 1
}

SRC_ENV=$1
DEST_ENV=$2

[ -z "$SRC_ENV" ] && usage
[ -z "$DEST_ENV" ] && usage

# Convert to uppercase to match variable names
SRC_VAR="EFS_${SRC_ENV^^}"
DEST_VAR="EFS_${DEST_ENV^^}"

SRC_PATH="${!SRC_VAR}"
DEST_PATH="${!DEST_VAR}"

if [ -z "$SRC_PATH" ] || [ -z "$DEST_PATH" ]; then
  echo "Error: Unknown environment. Check your .env file for $SRC_VAR and $DEST_VAR"
  exit 1
fi

RSYNC_OPTS="-avz --delete"
if [ -n "$EFS_SSH_PROXY" ]; then
  RSYNC_OPTS="$RSYNC_OPTS -e 'ssh -o ProxyJump=$EFS_SSH_PROXY'"
fi

echo "Syncing $SRC_ENV ($SRC_PATH) -> $DEST_ENV ($DEST_PATH)"

# shellcheck disable=SC2086
eval rsync $RSYNC_OPTS "$SRC_PATH/" "$DEST_PATH/"

