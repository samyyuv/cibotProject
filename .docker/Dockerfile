FROM composer:2 as composer
COPY . /app
RUN composer install --ignore-platform-reqs --no-scripts

FROM php:7.4.1-apache
USER root
WORKDIR /var/www/html

RUN apt-get update && apt-get install -y nodejs npm\
  libpng-dev \
  zlib1g-dev \
  libxml2-dev \
  libzip-dev \
  zip \
  curl \
  unzip \
  && docker-php-ext-configure gd \
  && docker-php-ext-install -j$(nproc) gd \
  && docker-php-ext-install pdo_mysql \
  && docker-php-ext-install mysqli \
  && docker-php-ext-install zip \
  && docker-php-source delete

COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf
COPY --from=composer /app/vendor /var/www/root/vendor

RUN chown -R www-data:www-data /var/www/html \
  && a2enmod rewrite