FROM debian:buster
LABEL maintainer="rvertie@student.21-school.ru"
RUN apt-get update && apt-get install -y \
    mariadb-server \
    nginx \
    php-fpm php-mysql \
    wget
# WORKDIR /
# COPY . /usr/src/app
ENTRYPOINT ["sh"]
