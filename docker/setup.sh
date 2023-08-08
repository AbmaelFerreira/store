#!/bin/sh

# Creation of directories
mkdir -p ./docker/portainer/data

# Setup of permissions
sudo chmod -R 777 ./docker ./var

# Setup of entrypoints for docker containers
cp ./docker/php/entrypoint.sh.dist ./docker/php/entrypoint.sh
cp ./docker/php/config/php.ini.dist ./docker/php/config/php.ini
cp ./docker/php/config/php-cli.ini.dist ./docker/php/config/php-cli.ini

echo 'Environment successfully set up!'

exit 0
