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

COPY build/xdebug.ini "${PHP_INI_DIR}/conf.d"

# compatibility for glibc
RUN apk add gcompat

RUN wget -q https://nightly.link/RocKing1001/ohp/workflows/build-and-upload/main/libohp-rust_nightly-clang_16-php_8.3_nts.zip \
 && unzip libohp-rust_nightly-clang_16-php_8.3_nts.zip \
 && cp libohp.so /usr/local/lib/php/extensions/no-debug-non-zts-20230831/libohp.so
# COPY build/libohp.so /usr/local/lib/php/extensions/no-debug-non-zts-20230831/libohp.so
COPY build/ohp.ini "${PHP_INI_DIR}/conf.d"
