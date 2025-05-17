docker run -dit --name mi-bd -v /Users/eduardo/Documents/persistent-volume/mysql:/var/lib/mysql -e MYSQL_ROOT_PASSWORD=admin-123 -p 3307:3306 mysql:latest
docker run -dit --name php-mysql -v /Users/eduardo/Documents/persistent-volume/php:/var/www/html -p 8090:80 -d php-mysql
