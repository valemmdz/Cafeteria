# Imagen base con PHP y Apache
FROM php:8.2-apache

# Copia todos los archivos del proyecto al contenedor
COPY . /var/www/html/

# Establece el directorio de trabajo
WORKDIR /var/www/html/

# Expone el puerto donde correrá Apache
EXPOSE 80
