#!/bin/bash
 set -e

 CONTAINER_FIRST_STARTUP="CONTAINER_FIRST_STARTUP"
 if [ ! -e /$CONTAINER_FIRST_STARTUP ]; then
     touch /$CONTAINER_FIRST_STARTUP
     sleep 10
     # run artisan scriptsd
     pushd /var/www
       composer install
       php artisan migrate --seed
       php artisan key:generate
       chmod -R 777 storage bootstrap/cache
       php artisan optimize
     popd
 else
     echo "No startup action"
     # script that should run the rest of the times
 fi


 # first arg is -f or --some-option
 if [ "${1#-}" != "$1" ]; then
         set -- php "$@"
 fi

 exec "$@"