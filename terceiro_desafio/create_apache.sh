#! /bin/bash

apt-get update && apt-get upgrade -y

apt-get install -y \
    apache2 \
    unzip

cd /tmp
wget https://github.com/denilsonbonatti/linux-site-dio/archive/refs/heads/main.zip
unzip main.zip

cd linux-site-dio-main
cp -R * /var/www/html/
