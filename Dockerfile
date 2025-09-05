# Stage 1: Build assets with Node
FROM node:18 as frontend

WORKDIR /app
COPY package*.json vite.config.* ./
RUN npm install
COPY resources/ resources/
COPY public/ public/
RUN npm run build

# Stage 2: PHP + Nginx
FROM richarvey/nginx-php-fpm:3.1.6

# Copy app source
COPY . .

# Copy built assets from Stage 1
COPY --from=frontend /app/public/build /var/www/html/public/build

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

CMD ["/start.sh"]
