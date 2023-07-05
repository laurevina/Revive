# Utilisez une image de base contenant PHP et Apache
FROM php:7.4-apache

# Copiez les fichiers de l'application dans le conteneur
COPY . /var/www/html/

# Définition du répertoire de travail
WORKDIR /var/www/html

# Installez les dépendances de l'application
RUN apt-get update && apt-get install -y \
    curl \
    libonig-dev \
    libpng-dev \
    libzip-dev \
    zlib1g-dev \
    && docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip \
    && a2enmod rewrite

# Définition du port d'exposition
EXPOSE 8888

# Démarrez le serveur Apache
CMD ["apache2-foreground"]
