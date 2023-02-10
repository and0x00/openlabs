FROM ubuntu:latest

ENV DEBIAN_FRONTEND noninteractive

RUN apt update && apt upgrade -y
RUN apt install apache2 php libapache2-mod-php -y
RUN a2enmod ssl && a2enmod socache_shmcb
RUN a2ensite default-ssl
RUN service apache2 restart

EXPOSE 80 443
CMD ["apache2ctl", "-D", "FOREGROUND"]
