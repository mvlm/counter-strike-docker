FROM mindk/php5.3.29-apache

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libmysqlclient-dev \
        libmcrypt-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysql mcrypt zip

COPY dockerfiles/php.ini /usr/local/etc/php
COPY psychostats/upload .

RUN mkdir -p temp \
   && chown -R www-data: temp config.php
