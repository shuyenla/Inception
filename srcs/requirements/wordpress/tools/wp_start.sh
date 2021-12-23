#!/bin/sh
wp core is-installed --path=/var/www/wordpress --allow-root
if [ $? == 1 ];then
    wp core install --url="shlu.42.fr" --path=/var/www/wordpress --title="Wordpress for Inception" --admin_user="shlu" --admin_password="password" --admin_email=shlu@student.42.fr --skip-email --allow-root
    wp user create cutie cutie@cutiee.com --path=/var/www/wordpress --role=editor --allow-root
fi

php-fpm7.3 -F