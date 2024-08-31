# Dockerfile - Fichier de configuration Docker pour déployer l'application sur Render

FROM php:7.4-apache

# Copie des fichiers de configuration Apache
COPY ./docker/apache-config.conf /etc/apache2/sites-available/000-default.conf

# Installation des extensions PHP nécessaires
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copie du code de l'application dans le conteneur
COPY . /var/www/html

# Activation de mod_rewrite pour Apache
RUN a2enmod rewrite
