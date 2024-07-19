# Используем базовый образ с Apache и PHP
FROM php:7.4-apache

# Копируем все содержимое текущей директории в /var/www/html/
COPY . /var/www/html/

# Устанавливаем утилиту ping
RUN apt-get update && apt-get install -y iputils-ping


# Создаем каталог /home/Injector в контейнере
RUN mkdir -p /home/Injector


# Изменяем права доступа и владельца для /var/www/html/ и /home/Injector
RUN chown -R www-data:www-data /var/www/html /home/Injector && \
    chmod -R 755 /var/www/html /home/Injector

# Открываем порт 80 для доступа к приложению
EXPOSE 80
