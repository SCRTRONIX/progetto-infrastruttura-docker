#!/bin/bash


PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin


CONTAINER_NAME="72a989f68cfc"
DB_USER="root"
DB_PASS="vm1"
DB_NAME="db_progetto"
BACKUP_DIR="/var/backups/mariadb"
DAYS_TO_KEEP=7

# Crea la cartella di backup se non esiste
mkdir -p "$BACKUP_DIR"

# Nome del file compresso con data e ora (es. backup_mydb_2026-10-05_0200.sql.gz)
TIMESTAMP=$(date +'%Y-%m-%d_%H%M')
BACKUP_FILE="$BACKUP_DIR/backup_${DB_NAME}_${TIMESTAMP}.sql.gz"

# 1. Esegui il dump dal container e comprimilo direttamente
docker exec -i "$CONTAINER_NAME" mariadb-dump -u "$DB_USER" -p"$DB_PASS" "$DB_NAME" | gzip > "$BACKUP_FILE"

# 2. Elimina i backup più vecchi di N giorni per liberare spazio
find "$BACKUP_DIR" -type f -name "backup_${DB_NAME}_*.sql.gz" -7 +$DAYS_TO_KEEP -delete