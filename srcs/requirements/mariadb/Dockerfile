FROM debian:buster

RUN apt-get update -y && \
    apt-get install -y libnss3-tools && \
    apt-get install -y wget && \
    apt-get install -y mariadb-server && \
    apt-get install -y php php-fpm php-gd php-mysql php-cli php-curl php-json && \
    apt-get install -y php-mysql

RUN mkdir -p /var/www/localhost/phpmyadmin
RUN wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-english.tar.gz
RUN tar xzf phpMyAdmin-4.9.0.1-english.tar.gz --strip-components=1 -C /var/www/localhost/phpmyadmin
ADD ./srcs/config.inc.php /var/www/localhost/phpmyadmin/
RUN rm phpMyAdmin-4.9.0.1-english.tar.gz

CMD service mysql start; \
    service php7.3-fpm start; \
    mysql -u root -p$PASSWORD -e "CREATE USER '$USERNAME'@'localhost' identified by '$PASSWORD';"; \
    mysql -u root -p$PASSWORD -e "CREATE DATABASE wordpress;"; \
    mysql -u root -p$PASSWORD -e "GRANT ALL PRIVILEGES ON wordpress.* TO '$USERNAME'@'localhost';"; \
    mysql -u root -p$PASSWORD -e "FLUSH PRIVILEGES;"; \
    service mysql reload; \
    bash