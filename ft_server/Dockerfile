FROM debian:buster

LABEL maintainer="rvertie@student.21-school.ru"

RUN apt-get update && apt-get upgrade && apt-get install -y \
    mariadb-server \
    nginx \
    openssl \
    php php-fpm php-mysql \
    vim \
    wget

COPY ./srcs /tmp/srcs

EXPOSE 80 443

CMD ["bash", "/tmp/srcs/init.sh"]
