FROM debian:buster

RUN apt-get update -y && \
    apt-get install -y wget php php-fpm php-gd php-cli php-curl php-json php-mysql curl

# wp-cli for configure wp from command line
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/local/bin/wp

# wordpress installation and configuration
RUN mkdir -p /var/www/wordpress
RUN wp core download --version=4.8.15 --path=/var/www/wordpress --allow-root
COPY ./conf/wp-config.php /var/www/wordpress
RUN chown -R www-data:www-data /var/www/*
RUN chmod -R 755 /var/www/*

# initialize wordpress
COPY ./tools/wp_start.sh /tmp/
RUN chmod +x /tmp/wp_start.sh

# php-fpm
RUN mkdir -p /run/php/
RUN echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf

CMD bash /tmp/wp_start.sh