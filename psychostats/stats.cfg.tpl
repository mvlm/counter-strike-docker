# stats.cfg should ONLY contain basic database settings.
# any other configuration settings will be ignored.

dbtype = mysql
dbhost = ${DB_ADDR}
dbport = 3306
dbname = ${DB_NAME}
dbuser = ${DB_USER}
dbpass = ${DB_PASS}
dbtblprefix = ps_
dbcompress = 0
