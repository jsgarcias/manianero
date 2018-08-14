FROM jguyomard/laravel-php

WORKDIR /app
COPY . /app
CMD composer install
CMD php artisan serve --host=0.0.0.0 --port=80
EXPOSE 80 33060