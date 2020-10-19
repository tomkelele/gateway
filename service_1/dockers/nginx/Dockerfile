FROM nginx:alpine

COPY nginx.conf /etc/nginx/
RUN set -x ; \
    addgroup -g 1003 -S www-data ; \
    adduser -u 1001 -D -S -G www-data www-data && exit 0 ; exit 1

CMD ["nginx"]