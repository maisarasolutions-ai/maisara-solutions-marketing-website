#!/bin/bash
set -e
BACKUP_DIR=/opt/maisarasolutions/backups
TIMESTAMP=$(date +%Y%m%d_%H%M%S)
mkdir -p "$BACKUP_DIR"
docker compose -f /opt/maisarasolutions/docker-compose.yml exec -T postgres pg_dump -U "${POSTGRES_USER:-maisara}" "${POSTGRES_DB:-maisara}" > "$BACKUP_DIR/db_$TIMESTAMP.sql"
gzip -f "$BACKUP_DIR/db_$TIMESTAMP.sql"
find "$BACKUP_DIR" -type f -mtime +7 -delete
