# rustyrad.io website

This is a wordpress website.

Start a MySQL instance:

    $ docker run -d --name rusty_mysql \
        -e "MYSQL_ROOT_PASSWORD=doesntmatter" \
        -e "MYSQL_DATABASE=rustydb" \
        -e "MYSQL_USER=rustydbuser" \
        -e "MYSQL_PASSWORD=rustydbpass" \
        mysql:5

Start wordpress:

    $ docker run --name rusty_wp \
        --link rusty_mysql:mysql \
        -e "WORDPRESS_DB_USER=rustydbuser" \
        -e "WORDPRESS_DB_PASSWORD=rustydbpass" \
        -e "WORDPRESS_DB_NAME=rustydb" \
        -v "$PWD/wp/":/var/www/html \
        -p 8083:80 \
        wordpress:4

Go to [http://localhost:8083/](localhost:8083/) if your container is accessible via `localhost`.
