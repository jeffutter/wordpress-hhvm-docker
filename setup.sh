#!/bin/bash

cd /home/wordpress/wordpress
mv ../wp-config.php ./
chown wordpress:wordpress wp-config.php ../production-config.php
