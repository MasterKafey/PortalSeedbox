FROM php:8.3-apache

RUN apt-get update && apt-get install -y \
    git \
    libsodium-dev \
    libicu-dev \
    libcurl4-openssl-dev \
    zlib1g-dev \
    libpng-dev \
    libonig-dev \
    libpq-dev \
    libzip-dev

RUN docker-php-ext-install pdo pdo_mysql sodium intl curl fileinfo gd zip

RUN apt clean && rm -rf /var/lib/apt/lists/*

RUN a2enmod rewrite

COPY .docker/apache2/000-default.conf /etc/apache2/sites-available/000-default.conf

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html

WORKDIR /var/www/html

USER www-data
RUN composer install --no-dev --optimize-autoloader
USER root

EXPOSE 80

CMD ["/usr/sbin/apachectl", "-D", "FOREGROUND"]