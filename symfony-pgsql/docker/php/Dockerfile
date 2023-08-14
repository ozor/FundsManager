# Используем официальный образ PHP для Symfony
FROM php:8.2-fpm

# Устанавливаем необходимые зависимости
RUN apt-get update --fix-missing && \
    apt-get install -y \
    git unzip \
    libc-client-dev \
    libssh-dev \
    librabbitmq-dev \
    libmemcached-dev \
    libkrb5-dev \
    libpq-dev && rm -r /var/lib/apt/lists/* \
    && pecl install xdebug-3.2.0 \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install imap \
    && pecl install amqp \
    && docker-php-ext-enable amqp \
    && docker-php-ext-install pdo_pgsql pgsql

# Устанавливаем Composer глобально
# RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
COPY --from=composer/composer:latest-bin /composer /usr/local/bin/composer

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Экспортируем порт для веб-сервера
EXPOSE 9000

# Запускаем PHP-FPM
CMD ["php-fpm"]