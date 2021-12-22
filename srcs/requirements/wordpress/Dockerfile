FROM debian:buster

RUN apt-get update -y && \
    apt-get install -y wget php php-fpm php-gd php-cli php-curl php-json php-mysql curl

# WORDPRESS




# RUN wget -c https://wordpress.org/latest.tar.gz
# RUN tar -xvzf latest.tar.gz

RUN adduser -D -g www www
RUN mkdir -p /var/www/wordpress
RUN chown www:www /var/www/wordpress

RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

# RUN cp -r /wordpress/ /var/www/
COPY ./conf/wp-conf.php /var/www/wordpress
# RUN rm latest.tar.gz

RUN chown -R www-data:www-data /var/www/*
RUN chmod -R 755 /var/www/*

RUN mkdir -p /run/php/
RUN echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf

CMD ["php-fpm7.3", "-F"]