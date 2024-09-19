FROM php:8.3-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Копируем ваш проект в контейнер
COPY . .

# Установка зависимостей
RUN composer install

CMD ["php", "-S", "0.0.0.0:8000", "-t", "src"]