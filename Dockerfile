FROM php:8.2-apache

# Install dependency dan composer
RUN apt-get update && apt-get install -y \
    unzip \
    git \
    curl

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory ke folder web server
WORKDIR /var/www/html

# Salin semua file aplikasi ke dalam container
COPY . /var/www/html

# Jalankan composer install
RUN composer install --no-dev --optimize-autoloader

# Set permission yang benar (wajib)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Aktifkan mod_rewrite jika pakai .htaccess
RUN a2enmod rewrite

# Tambahkan konfigurasi Apache agar mengizinkan override
RUN echo '<Directory /var/www/html/>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' > /etc/apache2/conf-available/allow-override.conf \
    && a2enconf allow-override

# Ganti DocumentRoot ke /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/000-default.conf
