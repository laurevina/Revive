# Utilisez une image de base contenant PHP
FROM php:7.4-apache

# Copiez les fichiers de votre application PHP vers le conteneur
COPY . /var/www/html

# Installez les dépendances de votre application si nécessaire
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    && docker-php-ext-install -j$(nproc) pdo_mysql gd

# Exposez le port du serveur Apache
EXPOSE 80

# Démarrez le serveur Apache
CMD ["apache2-foreground"]
