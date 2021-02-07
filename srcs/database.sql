CREATE DATABASE wordpress;
GRANT ALL PRIVILEGES ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;
FLUSH PRIVILEGES;
update mysql.user set plugin='' where user='root';
