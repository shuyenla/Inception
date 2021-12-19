FROM debian:buster

# ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update -y && \
    apt-get install -y wget php php-fpm php-gd php-cli php-curl php-json

# WORDPRESS

RUN wget -c https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz

RUN mkdir -p /var/www/localhost
# RUN chown -R www-data:www-data /var/www/
# RUN chmod -R 755 /var/www/
RUN cp -r wordpress/* /var/www/localhost/
ADD ./conf/wp-conf.php /var/www/localhost/wordpress
ADD ./conf/localhost /var/www/localhost
RUN rm latest.tar.gz

RUN mkdir -p /run/php/
# RUN chown -R www-data:www-data /var/run/
# RUN chmod -R 755 /var/run/
# RUN service php7.3-fpm start

CMD ["php-fpm7.3"] \
# -y /etc/php/7.3/fpm/php-fpm.conf
# CMD service php7.3-fpm start; \
    service php7.3-fpm status; \
    cat /var/log/php7.3-fpm.log

