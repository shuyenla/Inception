# https://mariadb.com/kb/en/installing-and-using-mariadb-via-docker/

FROM debian:buster

RUN apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y mariadb-server

# Start the service and setup MYSQL 

RUN mkdir /var/run/mysqld
RUN chown -R mysql:mysql /var/run/mysqld

CMD mysqld_safe; \
    mysql -u root -p$PASSWORD -e "CREATE OR REPLACE USER $USERNAME@localhost IDENTIFIED BY '$PASSWORD';"; \
    mysql -u root -p$PASSWORD -e "CREATE DATABASE IF NOT EXISTS wordpress;"; \
    mysql -u root -p$PASSWORD -e "GRANT ALL PRIVILEGES ON wordpress.* TO $USERNAME@localhost;"; \
    mysql -u root -p$PASSWORD -e "FLUSH PRIVILEGES;"; \
    # ; \
    service mysql reload; \
    cat /var/log/mysql/error.log