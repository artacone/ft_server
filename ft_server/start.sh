#!/bin/sh

# $AUTOINDEX=OFF to turn off nginx_autoindex on start-up

docker build -t ft_server .
docker run --name server --rm -it -p 80:80 -p 443:443 -e TZ=Europe/Moscow ft_server