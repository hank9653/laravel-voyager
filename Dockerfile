FROM hank9653/hank9653-cicdtest:1.0.1

WORKDIR /var/www/html

COPY laravel .

RUN composer install

RUN cp .env.example .env
RUN php artisan key:generate

RUN chown -R www-data:www-data /var/www/html
RUN chmod -R 775 /var/www/html

RUN a2enmod rewrite

RUN service apache2 restart
CMD /usr/sbin/apache2ctl -D FOREGROUND

RUN apt-get update
RUN apt-get install -y vim
