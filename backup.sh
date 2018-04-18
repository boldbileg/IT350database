#!/bin/bash
#!/usr/bin/env bash
#
# 	Use this script to perform backups of one or more MySQL databases.
#

# Databases that you wish to be backed up by this script. You can have any number of databases specified; encapsilate each database name in single quotes and separate each database name by a space.
#
# Example:
# databases=( '__DATABASE_1__' '__DATABASE_2__' )
databases=( 'biotech' )

# The host name of the MySQL database server; usually 'localhost'
db_host="localhost"

# The port number of the MySQL database server; usually '3306'
db_port="3306"

# The MySQL user to use when performing the database backup.
db_user="root"

# The password for the above MySQL user.
db_pass="nb576010746"

# Directory to which backup files will be written. Should end with slash ("/").
backups_dir="/var/www/"

backups_user="root"

# Date/time included in the file names of the database backup files.
datetime=$(date +'%Y-%m-%dT%H:%M:%S')

for db_name in ${databases[@]}; do
        # Create database backup and compress using gzip.
        mysqldump -u $db_user -h $db_host -P $db_port --password=$db_pass $db_name > $backups_dir$db_name--$datetime.sql.gz
done

eval mongodump --db biotech

createBackup="curl -XPUT 'http://localhost:9200/_snapshot/my_backup' -H 'Content-Type: application/json' -d '{\"type\": \"fs\",\"settings\": {\"location\": \"/var/www/ESbackup\",\"compress\": true}}'"

eval $createBackup

tail -10 /var/log/apache2/error.log