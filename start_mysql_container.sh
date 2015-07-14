#!/usr/bin/env bash


docker run -d --name rusty_mysql \
  -e "MYSQL_ROOT_PASSWORD=doesntmatter" \
  -e "MYSQL_DATABASE=rustydb" \
  -e "MYSQL_USER=rustydbuser" \
  -e "MYSQL_PASSWORD=rustydbpass" \
  mysql:5
