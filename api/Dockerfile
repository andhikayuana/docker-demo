FROM php:7.3.1-alpine
MAINTAINER yuana <andhika@yuana.id>
WORKDIR /app
ADD main.php /app
ENV API_NAME="Jarjit API"
ENV API_VERSION=1.0.0
ENV API_HOST=0.0.0.0
ENV API_PORT=3000
CMD php -S $API_HOST:$API_PORT main.php
EXPOSE $API_PORT