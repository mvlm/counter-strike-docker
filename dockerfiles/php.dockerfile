FROM mindk/php5.3.29-apache

WORKDIR /var/www/html

RUN apk add --no-cache gmp-dev libzip-dev \
        freetype-dev \
        libjpeg-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gmp zip bcmath mysqli pdo_mysql \
    && docker-php-ext-install -j$(nproc) gd

COPY psychostats/upload .
