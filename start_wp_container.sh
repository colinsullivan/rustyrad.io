#!/usr/bin/env bash


#docker run --name rusty_wp \
  #--link rusty_mysql:mysql \
  #-e "WORDPRESS_DB_USER=rustydbuser" \
  #-e "WORDPRESS_DB_PASSWORD=rustydbpass" \
  #-e "WORDPRESS_DB_NAME=rustydb" \
  #-v "$PWD/wp/":/var/www/html \
  #-p 8083:80 \
  #wordpress:4

docker run --name rusty_wp \
  --link rusty_mysql:mysql \
  -e "WORDPRESS_DB_USER=rustydbuser" \
  -e "WORDPRESS_DB_PASSWORD=rustydbpass" \
  -e "WORDPRESS_DB_NAME=rustydb" \
  -v "$PWD/wp/":/usr/share/nginx/www \
  -p 8084:80 \
  eugeneware/docker-wordpress-nginx
