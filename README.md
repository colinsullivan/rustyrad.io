# rustyrad.io website

This is a wordpress website.

Start a MySQL instance (this script spawns the MySQL container to the background):

    $ ./start_mysql_container.sh

Start wordpress (this script runs the container interactively):
    
    $ ./start_wp_container.sh

Go to [http://localhost:8083/](localhost:8083/) if your container is accessible via `localhost`.
