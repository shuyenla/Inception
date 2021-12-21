FROM debian:buster

RUN apt-get update -y && \
    apt-get install -y wget php php-fpm php-gd php-cli php-curl php-json

# WORDPRESS

RUN wget -c https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz

RUN mkdir -p /var/www/localhost
COPY ./conf/index.html /var/www/localhost/
COPY ./conf/wp-conf.php /var/www/localhost/wordpress
RUN cp -r /wordpress/* /var/www/localhost/
RUN rm latest.tar.gz

RUN chown -R www-data:www-data /var/www/*
RUN chmod -R 755 /var/www/*

RUN mkdir -p /run/php/

CMD ["php-fpm7.3", "-F"]