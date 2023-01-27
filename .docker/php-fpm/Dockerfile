FROM php:8.1-fpm

RUN apt-get update
RUN apt-get install -y openssl zip unzip git curl libzip-dev libonig-dev libicu-dev autoconf pkg-config libssl-dev libpq-dev
RUN docker-php-ext-install bcmath mbstring intl opcache pdo sockets pdo_mysql

RUN pecl install xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN useradd -ms /bin/bash gennapp

ARG PUID=1000
ENV PUID ${PUID}
ARG PGID=1000
ENV PGID ${PGID}

RUN groupmod -o -g ${PGID} www-data && \
     usermod -o -u ${PUID} -g www-data www-data
COPY .docker/php-fpm/entrypoint/docker-entrypoint.sh /opt/docker-entrypoint.sh
COPY .docker/php-fpm/conf.d/* /usr/local/etc/php/conf.d/

WORKDIR /var/www
ENTRYPOINT ["bash", "/opt/docker-entrypoint.sh"]
CMD ["php-fpm"]

USER root
RUN chown -R www-data:www-data /var/www
RUN chmod -R ug+w /var/www

EXPOSE 9000