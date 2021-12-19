# https://mariadb.com/kb/en/installing-and-using-mariadb-via-docker/

FROM debian:buster

RUN apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y mariadb-server

# Start the service and setup MYSQL
CMD service mysql start; \
    mysql -u root -p$PASSWORD -e "CREATE OR REPLACE USER $USERNAME@localhost IDENTIFIED BY '$PASSWORD';"; \
    mysql -u root -p$PASSWORD -e "CREATE DATABASE IF NOT EXISTS wordpress;"; \
    mysql -u root -p$PASSWORD -e "GRANT ALL PRIVILEGES ON wordpress.* TO $USERNAME@localhost;"; \
    mysql -u root -p$PASSWORD -e "FLUSH PRIVILEGES;"; \
    service mysql reload;