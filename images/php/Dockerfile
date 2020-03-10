FROM php:7.4.3-fpm

MAINTAINER lukin.site <info@lukin.site>

RUN apt-get update && apt-get install -y \
        curl \
        wget \
        git \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libpng-dev \
        libonig-dev \
        libzip-dev \
        locales \
        --no-install-recommends \
    && rm -r /var/lib/apt/lists/* \
    && printf 'en_US.UTF-8 UTF-8\n' >> /etc/locale.gen \
    && printf 'ru_RU.UTF-8 UTF-8\n' >> /etc/locale.gen \
    && locale-gen \
    && docker-php-ext-install -j$(nproc) iconv mbstring mysqli pdo_mysql zip \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd
    
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD php.ini /usr/local/etc/php/conf.d/40-custom.ini

WORKDIR /var/www

CMD ["php-fpm"]