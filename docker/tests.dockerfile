FROM php:7.3-cli

# Install Composer
RUN curl -s https://getcomposer.org/installer | php && mv composer.phar /usr/local/bin/composer

VOLUME [ "/project" ]
WORKDIR /project
