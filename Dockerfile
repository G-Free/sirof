FROM php:8.2-apache

# Copiar todos os ficheiros para o Apache
COPY . /var/www/html/

# Dar permissões
RUN chmod -R 755 /var/www/html/

# Ativar mod_rewrite
RUN a2enmod rewrite

# Configurar Apache para aceitar index.php
RUN echo "DirectoryIndex index.php index.html" >> /etc/apache2/apache2.conf

EXPOSE 80
