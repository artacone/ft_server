#!/bin/bash

# initial file copy
mv ./tmp/srcs/main.html /var/www

# config nginx
mv ./tmp/srcs/rvertie.conf /etc/nginx/conf.d
chown -R www-data:www-data /var/www

# phpmyadmin
wget https://files.phpmyadmin.net/phpMyAdmin/5.0.1/phpMyAdmin-5.0.1-english.tar.gz
tar xvfz phpMyAdmin-5.0.1-english.tar.gz && rm phpMyAdmin-5.0.1-english.tar.gz
mv phpMyAdmin-5.0.1-english /var/www/phpmyadmin
mv ./tmp/srcs/config.inc.php /var/www/phpmyadmin
rm /var/www/phpmyadmin/config.sample.inc.php

# wordpress
wget https://wordpress.org/latest.tar.gz
tar xvfz latest.tar.gz && rm latest.tar.gz
mv wordpress /var/www
mv /tmp/srcs/wp-config.php var/www/wordpress/

# start mysql FIXME
service mysql start
echo "CREATE DATABASE wordpress;" | mysql -u root
echo "GRANT ALL PRIVILEGES ON wordpress.* TO 'rvertie'@'localhost' IDENTIFIED BY 'rvertie' WITH GRANT OPTION;" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root

# certificate SSL
openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /etc/ssl/private/nginx-selfsigned.key -out /etc/ssl/certs/nginx-selfsigned.crt < /tmp/srcs/ssl.txt
rm -rf /tmp/srcs/ssl.txt

# start services
service php7.3-fpm start
service nginx start

# autoindex handle
if [ "$AUTOINDEX" == "OFF" ]
then
  cd /etc/nginx/conf.d
  sed -i 's/autoindex on;/autoindex off;/g' rvertie.conf
  sed -i 's/index main.html/# index main.html/g' rvertie.conf
  service nginx restart
fi

bash