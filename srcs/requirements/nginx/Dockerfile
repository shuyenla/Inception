FROM debian:buster

RUN apt-get update -y && \
    apt-get install -y apt-utils libnss3-tools wget nginx

# SSL tool
RUN mkdir ~/mkcert
RUN wget https://github.com/FiloSottile/mkcert/releases/download/v1.1.2/mkcert-v1.1.2-linux-amd64
RUN mv mkcert-v1.1.2-linux-amd64 mkcert; \
    chmod +x mkcert; \
    ./mkcert -install; \
    ./mkcert shlu.42.fr
RUN mv shlu.42.fr.pem ~/mkcert; \
    mv shlu.42.fr-key.pem ~/mkcert

# Set permission and owner for NGINX
RUN chown -R www-data:www-data /var/www/*
RUN chmod -R 755 /var/www/*

# configuation file of NGINX
COPY ./conf/nginx.conf /etc/nginx/nginx.conf

# Start the service
CMD ["nginx", "-g", "daemon off;"]