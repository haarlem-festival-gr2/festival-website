FROM docker.io/library/php:8.3-fpm-alpine

RUN apk update

# PHP Data Objects with Postgres support
RUN apk add postgresql \
 && apk add --no-cache --virtual .build-deps postgresql-dev \
 && docker-php-ext-install pdo pdo_pgsql \
 && apk del .build-deps

# XDEBUG for better debug outputs
RUN apk add --no-cache --virtual .build-deps $PHPIZE_DEPS linux-headers \
 && pecl install xdebug \
 && apk del .build-deps

COPY ./xdebug.ini "${PHP_INI_DIR}/conf.d"

# compatibility for glibc
RUN apk add gcompat

# COPY ./extensions/newstd/target/release/libnewstd.so /usr/local/lib/php/extensions/no-debug-non-zts-20230831/libnewstd.so
COPY ./newstd.ini "${PHP_INI_DIR}/conf.d"
