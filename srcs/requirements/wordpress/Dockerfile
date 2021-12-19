FROM debian:buster

# ARG DEBIAN_FRONTEND=noninteractive

RUN apt-get update -y && \
    apt-get install -y wget php php-fpm php-gd php-cli php-curl php-json

# WORDPRESS

RUN wget -c https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz
RUN mkdir -p /var/www/localhost
RUN cp -r wordpress/* /var/www/localhost/
ADD ./conf/wp-conf.php /var/www/localhost/wordpress
ADD ./conf/localhost /var/www/localhost
RUN rm latest.tar.gz

# CMD service php7.3-fpm start;