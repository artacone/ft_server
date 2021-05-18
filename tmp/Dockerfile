FROM debian:buster

LABEL maintainer="rvertie@student.21-school.ru"

RUN apt-get update && apt-get upgrade && apt-get install -y \
    default-mysql-server \
    nginx \
    openssl \
    php php-fpm php-mysql \
    vim \
    wget

RUN service nginx start && service mysql start && service php7.3-fpm start

COPY ./srcs/start.sh /etc
COPY ./srcs/default /etc
COPY ./srcs/ssl.txt /etc
COPY ./srcs/wp-config.php /var
COPY ./srcs/main.html /var/www

EXPOSE 80
EXPOSE 443

ENTRYPOINT ["bash", "/etc/start.sh"]