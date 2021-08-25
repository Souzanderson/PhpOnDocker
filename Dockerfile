FROM php:7.0-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql 
RUN docker-php-ext-install json
RUN docker-php-ext-install hash
RUN docker-php-ext-install sockets
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install tokenizer
EXPOSE 3306
COPY . /var/www/html