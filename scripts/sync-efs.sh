#!/bin/bash

# Load environment variables
[ -f .env ] && source .env

SRC_ENV=${1:-local}
DEST_ENV=${2:-dev}

SRC_PATH_VAR="EFS_${SRC_ENV^^}_PATH"
DEST_PATH_VAR="EFS_${DEST_ENV^^}_PATH"
SRC_HOST_VAR="EFS_${SRC_ENV^^}_HOST"
DEST_HOST_VAR="EFS_${DEST_ENV^^}_HOST"
SRC_USER_VAR="EFS_${SRC_ENV^^}_USER"
DEST_USER_VAR="EFS_${DEST_ENV^^}_USER"

SRC_PATH=${!SRC_PATH_VAR}
DEST_PATH=${!DEST_PATH_VAR}
SRC_HOST=${!SRC_HOST_VAR}
DEST_HOST=${!DEST_HOST_VAR}
SRC_USER=${!SRC_USER_VAR}
DEST_USER=${!DEST_USER_VAR}

if [ -z "$SRC_PATH" ] || [ -z "$DEST_PATH" ]; then
  echo "Source or destination path not configured"
  exit 1
fi

SSH_OPTS=""
[ -n "$SSH_PROXY" ] && SSH_OPTS="-o ProxyJump=$SSH_PROXY"

RSYNC_RSH="ssh $SSH_OPTS"

rsync -avz -e "$RSYNC_RSH" "${SRC_USER:+$SRC_USER@}${SRC_HOST}:$SRC_PATH/" "${DEST_USER:+$DEST_USER@}${DEST_HOST}:$DEST_PATH/"
