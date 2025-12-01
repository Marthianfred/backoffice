# Usa la imagen oficial de WordPress como base
FROM wordpress:latest

# Reemplaza los archivos de configuración de Apache por los nuestros
COPY ports-custom.conf /etc/apache2/ports.conf
COPY vhost-custom.conf /etc/apache2/sites-available/000-default.conf
