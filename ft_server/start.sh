#!/bin/sh

docker build -t ft_server .
docker run --name server --rm -it -p 80:80 -p 443:443 ft_server