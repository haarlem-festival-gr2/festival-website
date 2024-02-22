FROM docker.io/library/php:8.3-fpm-alpine

RUN apk update

# PHP Data Objects
RUN docker-php-ext-install pdo pdo_mysql

# XDEBUG for better debug outputs
RUN apk add --no-cache --virtual .xdbg-build-deps $PHPIZE_DEPS linux-headers \
 && pecl install xdebug \
 && apk del .xdbg-build-deps

COPY build/xdebug.ini "${PHP_INI_DIR}/conf.d"

# ---- OHP - Oxidised Home Page ----
# compatibility for glibc
# RUN apk add gcompat
# RUN wget -q https://nightly.link/piguycs/ohp/workflows/build-and-upload/main/libohp-rust_nightly-clang_16-php_8.3_nts.zip \
#  && unzip libohp-rust_nightly-clang_16-php_8.3_nts.zip \
#  && cp libohp.so /usr/local/lib/php/extensions/no-debug-non-zts-20230831/libohp.so
# # COPY build/libohp.so /usr/local/lib/php/extensions/no-debug-non-zts-20230831/libohp.so
# COPY build/ohp.ini "${PHP_INI_DIR}/conf.d"
