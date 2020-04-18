FROM nginx:1.17.9-alpine

WORKDIR /var/www/html

COPY dockerfiles/default.conf /etc/nginx/conf.d/default.conf
COPY psychostats/upload .
