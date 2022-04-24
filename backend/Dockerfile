FROM php:7.2-apache

RUN apt-get update -y && \
  apt-get install -y libmcrypt-dev && \
  pecl install mcrypt-1.0.1 && \ 
  docker-php-ext-enable mcrypt

RUN apt-get update && apt-get install -y \
 libicu-dev \
 libpq-dev \
 libpng-dev \
 libmcrypt-dev \
 default-mysql-client \
 git \
 zip \
 unzip \
 && rm -r /var/lib/apt/lists/* \
 && docker-php-ext-configure pdo_mysql --with-pdo-mysql=mysqlnd \
 && docker-php-ext-install \
 intl \
 mbstring \
 pcntl \
 pdo_mysql \
 pdo_pgsql \
 pgsql \
 zip \
 gd \
 opcache

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

ENV APP_HOME /var/www/html

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

RUN a2enmod rewrite
RUN a2enmod ssl
RUN a2enmod headers

ENV APACHE_DOCUMENT_ROOT=/var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

RUN a2enmod rewrite headers

COPY . $APP_HOME

RUN composer install --no-interaction

RUN chown -R www-data:www-data $APP_HOME
