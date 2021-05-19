#!/bin/sh

cd /etc/nginx/conf.d
if grep 'autoindex on;' rvertie.conf >> /dev/null; then
  sed -i 's/autoindex on;/autoindex off;/g' rvertie.conf
  sed -i 's/index index.html/# index index.html/g' rvertie.conf
else
  sed -i 's/autoindex off;/autoindex on;/g' rvertie.conf
  sed -i 's/# index index.html/index index.html/g' rvertie.conf
fi
service nginx restart
