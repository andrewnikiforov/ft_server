FROM debian:buster

RUN apt-get -y update && apt-get -y upgrade 
RUN apt-get install -y nginx\
					   mariadb-server\
					   php7.3\
					   php-mysql\
					   php-fpm\
					   php-gd\
					   php-mbstring\
					   wget

ADD https://wordpress.org/latest.tar.gz var/www/html
ADD https://files.phpmyadmin.net/phpMyAdmin/5.0.4/phpMyAdmin-5.0.4-english.tar.gz var/www/html

RUN cd var/www/html && tar -xvzf latest.tar.gz && rm -rf latest.tar.gz && cd wordpress && rm -rf wp-config-sample.php 
RUN cd var/www/html && tar -xf phpMyAdmin-5.0.4-english.tar.gz && rm -rf phpMyAdmin-5.0.4-english.tar.gz && mv phpMyAdmin-5.0.4-english phpmyadmin && cd phpmyadmin && rm -rf config.sample.inc.php

COPY ./srcs/default /etc/nginx/sites-available/
COPY ./srcs/config.inc.php /var/www/html/phpmyadmin
COPY ./srcs/wp-config.php /var/www/html/wordpress
COPY ./srcs/start_services.sh ./srcs/autoindex_on_off.sh / 

RUN openssl req -x509 -nodes -days 365 -subj "/C=RU/ST=Moscow/L=Moscow/O=42/OU=21moscow/CN=omillan" -newkey rsa:2048 -keyout /etc/ssl/nginx-selfsigned.key -out /etc/ssl/nginx-selfsigned.crt

RUN chown -R www-data:www-data /var/www/
RUN chmod -R 755 /var/www/*

CMD bash start_services.sh
