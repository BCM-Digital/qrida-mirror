FROM drupal:php8.3-apache

RUN apt-get update -y && \
    apt-get install -y \
    git-man less libbsd0 libcurl3-gnutls libedit2 liberror-perl libpcre2-8-0 \
    libx11-6 libx11-data libxau6 libxcb1 libxdmcp6 libxext6 libxmuu1 git \
    python3-pip curl unzip && \
    rm -rf /var/lib/apt/lists/*


# Increase PHP memory limit
RUN echo "memory_limit = 512M" >> /usr/local/etc/php/conf.d/memory-limit.ini

WORKDIR /opt/drupal

# Copy composer files and install PHP dependencies.
COPY ./composer.json . 
COPY ./composer.lock .
RUN composer clear-cache
RUN composer install --no-dev --no-interaction --optimize-autoloader

# Set up settings files and permissions
RUN mkdir -p web/sites/default && \
    chmod 755 web/sites/default && \
    chown www-data:www-data web/sites/default && \
    touch web/sites/default/settings.php && \
    chmod 644 web/sites/default/settings.php && \
    chown www-data:www-data web/sites/default/settings.php

# Ensure files directory exists and has correct permissions
RUN mkdir -p web/sites/default/files && \
    chown -R www-data:www-data web/sites/default/files && \
    chmod -R 775 web/sites/default/files

EXPOSE 80 443