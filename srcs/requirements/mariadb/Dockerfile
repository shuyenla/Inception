# https://mariadb.com/kb/en/installing-and-using-mariadb-via-docker/

FROM debian:buster

RUN apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y mariadb-server

# Start the service and setup MYSQL 

RUN mkdir /var/run/mysqld
RUN chown -R mysql:mysql /var/run/mysqld
RUN mysql_install_db
# RUN mysql_secure_installation
COPY ./conf/* ./
COPY ./conf/init.sql /tmp/

# CMD bash

CMD ./start.sh; \
    mysqld --user=mysql --init-file="/tmp/init.sql"; \
    cat /var/log/mysql/error.log