# https://mariadb.com/kb/en/installing-and-using-mariadb-via-docker/

FROM debian:buster

RUN apt-get update -y && \
    apt-get install -y wget && \
    apt-get install -y libnss3-tools && \
    apt-get install -y mariadb-server


# Start the servicr and setup MYSQL
CMD service mysql start; \
    service php7.3-fpm start; \
    mysql -u root -p$PASSWORD -e "CREATE USER '$USERNAME'@'localhost' identified by '$PASSWORD';"; \
    mysql -u root -p$PASSWORD -e "CREATE DATABASE wordpress;"; \
    mysql -u root -p$PASSWORD -e "GRANT ALL PRIVILEGES ON wordpress.* TO '$USERNAME'@'localhost';"; \
    mysql -u root -p$PASSWORD -e "FLUSH PRIVILEGES;"; \
    service mysql reload;