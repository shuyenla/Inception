FROM debian:buster

RUN apt-get update -y && \
    apt-get install -y wget && \
    apt-get install -y libnss3-tools


# WORDPRESS

RUN wget -c https://wordpress.org/latest.tar.gz
RUN tar -xvzf latest.tar.gz
RUN mv wordpress/ /var/www/localhost
ADD ./srcs/wp-config.php /var/www/localhost/wordpress
ADD ./srcs/index.html /var/www/localhost
RUN rm latest.tar.gz

