# https://mariadb.com/kb/en/installing-and-using-mariadb-via-docker/

FROM debian:buster

RUN apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y mariadb-server

# Start the service and setup MYSQL 

RUN mkdir /var/run/mysqld
RUN chown -R mysql:mysql /var/run/mysqld
RUN mysql_install_db
COPY ./conf/* /tmp/
RUN mv /tmp/my.cnf /etc/mysql/my.cnf
RUN chmod 755 /etc/mysql/my.cnf

# CMD bash

CMD /tmp/start.sh; \
    mysqld --user=mysql  --init-file="/tmp/init.sql"; \
    cat /var/log/mysql/error.log