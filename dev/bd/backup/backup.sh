docker compose exec basedatos bash -c 'mysqldump -u $MYSQL_USER -p$MYSQL_PASSWORD bd' > bd/backup/backup.sql