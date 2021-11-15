#Версия php
FROM php:5.6-fpm 

# Копирование файлов composer
COPY composer.lock composer.json /var/www/

# Устанавливаем путь для рабочей области
WORKDIR /var/www




# Установка зависимостей
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip 

RUN apt-get update && apt-get install -y \
    imagemagick libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick


# Очищаем кеш
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Устанавливаем зависимости докера
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Установка композера
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Добовляем пользователя и задаем ему группу
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Путь для копии проекта
COPY . /var/www

# Копируем права
COPY --chown=www:www . /var/www

# Имя пользователя
USER www

# Устанавливаем порт для PHP
EXPOSE 9000
CMD ["php-fpm"]
