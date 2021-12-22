FROM debian:buster

RUN apt-get update -y && \
    apt-get install -y apt-utils libnss3-tools wget nginx

# SSL
RUN mkdir ~/mkcert
RUN wget https://github.com/FiloSottile/mkcert/releases/download/v1.1.2/mkcert-v1.1.2-linux-amd64
RUN mv mkcert-v1.1.2-linux-amd64 mkcert; \
    chmod +x mkcert; \
    ./mkcert -install; \
    ./mkcert shlu.42.fr
RUN mv shlu.42.fr.pem ~/mkcert; \
    mv shlu.42.fr-key.pem ~/mkcert


# NGINX

# add nginx config file
# COPY ./conf/nginx.conf ./etc/nginx/sites-available/nginx.conf

COPY ./conf/nginx.conf /etc/nginx/nginx.conf

# link nginx config file
# ** here we should use the absolute path to avoid link point back to itself **
# RUN ln -s /etc/nginx/sites-available/nginx.conf /etc/nginx/sites-enabled/nginx.conf


# Set permission and owner for NGINX

RUN chown -R www-data:www-data /var/www/*
RUN chmod -R 755 /var/www/*


# Start the service
CMD ["nginx", "-g", "daemon off;"]
#    service nginx status