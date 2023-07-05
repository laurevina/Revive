# Utilisez une image de PHP avec Apache
FROM php:7.4-apache

# Copiez les fichiers de l'application dans le conteneur
COPY . /var/www/html/

# Définissez le répertoire de travail
WORKDIR /var/www/html

# Installez les dépendances requises (vous pouvez ajuster en fonction des besoins du projet)
RUN apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libmcrypt-dev \
    libpng-dev \
    libzip-dev \
    unzip \
    zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo_mysql zip

# Définissez les variables d'environnement pour MySQL
ENV MYSQL_HOST=localhost \
    MYSQL_PORT=3306 \
    MYSQL_DATABASE=revive \
    MYSQL_USER=root \
    MYSQL_PASSWORD=password

# Activez le module Apache mod_rewrite pour la réécriture d'URL
RUN a2enmod rewrite

# Exposez le port 80 pour accéder à l'application depuis l'hôte
EXPOSE 80

# Démarrez Apache au lancement du conteneur
CMD ["apache2-foreground"]