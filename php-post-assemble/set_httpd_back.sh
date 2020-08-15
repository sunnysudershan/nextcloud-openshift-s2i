#!/bin/bash -e

# Restoring the main directory reference to /var/www/html
sed -i "s%^<Directory \"${APP_DATA}\"%<Directory \"${HTTPD_DATA_ORIG_PATH}/html\"%" ${HTTPD_MAIN_CONF_PATH}/httpd.conf
