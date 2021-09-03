# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    manager.sh                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: mdiallo <mdiallo@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/05/04 19:45:22 by mdiallo           #+#    #+#              #
#    Updated: 2021/05/06 18:00:40 by mdiallo          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

# #****************************************** CERTIFICAT SSL **********************************************

mkdir /etc/nginx/ssl
openssl req -newkey rsa:4096 \
            -x509 \
            -sha256 \
            -days 3650 \
            -nodes \
            -out /etc/nginx/ssl/localhost.pem \
            -keyout /etc/nginx/ssl/localhost.key \
            -subj "/C=FR/ST=Nice/L=Nice/O=42 School/OU=mdiallo/CN=localhost"

# #****************************************** NGINX *******************************************************

mkdir /var/www/localhost
mv ./default etc/nginx/sites-available
ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled
chown -R www-data /var/www/*
chmod -R 755 /var/www/*

# #****************************************** MYSQL ******************************************************

service mysql start
echo "CREATE DATABASE wordpress DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;" | mysql -u root
echo "GRANT ALL ON wordpress.* TO 'wordpress_user'@'localhost' IDENTIFIED BY 'password';" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root

# #****************************************** PHPMYADMIN **************************************************

wget https://files.phpmyadmin.net/phpMyAdmin/4.9.0.1/phpMyAdmin-4.9.0.1-all-languages.tar.gz
tar xvf phpMyAdmin-4.9.0.1-all-languages.tar.gz
mv phpMyAdmin-4.9.0.1-all-languages var/www/localhost/phpmyadmin
mv ./config.inc.php var/www/localhost/phpmyadmin
chmod 660 /var/www/localhost/phpmyadmin/config.inc.php
chown -R www-data:www-data /var/www/localhost/phpmyadmin
service php7.3-fpm start
echo "GRANT ALL ON *.* TO 'gan2'@'localhost' IDENTIFIED BY '123'" | mysql -u root
echo "FLUSH PRIVILEGES;" | mysql -u root

# #****************************************** WORDPRESS ****************************************************

wget https://wordpress.org/latest.tar.gz
tar xvf latest.tar.gz
mkdir var/www/localhost/wordpress
cp -a wordpress/. /var/www/localhost/wordpress
mv ./wp-config.php /var/www/localhost/wordpress

# #****************************************** LANCEMENT ****************************************************

service mysql restart
service php7.3-fpm restart
service nginx start
bash
