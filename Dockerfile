FROM webdevops/php-nginx:8.1
COPY . /app

ENV WEB_DOCUMENT_INDEX /public/index.php

RUN composer install -d /app