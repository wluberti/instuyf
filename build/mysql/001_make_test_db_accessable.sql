use mysql;

GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' IDENTIFIED BY 'example';
FLUSH PRIVILEGES;