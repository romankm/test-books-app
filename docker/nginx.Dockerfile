FROM nginx

ADD docker/nginx/conf.d/nginx.conf /etc/nginx/conf.d/default.conf

WORKDIR /var/www/books
