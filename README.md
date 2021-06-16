# mk-symfony
EasyAdmin and News Page Preview

Установка
Выполнить ```docker-compose up -d``` из корневой папки mk-symfony

#Установка db mysql из корневой папки проекта
```
cat news.sql | docker exec -it mariadb /usr/bin/mysql -u root --password=rootpwd6421 news
```
```
docker exec -it app su
composer install
```
#==================#END#==================#

#if not PDO Driver
```
docker exec -it php su
docker-php-ext-install pdo_mysql
```
#or
```
docker-compose exec php docker-php-ext-install pdo_mysql
docker-compose exec php docker-php-ext-install intl
```
#docker-compose reload 

#if exception Message format 'date' is not supported. You have to install PHP intl extension to use this feature.
```
docker exec -it php su
apt-get -y update \
    && apt-get install -y libicu-dev\
    && docker-php-ext-configure intl \
    && docker-php-ext-install intl
```
#or 
```
docker exec -it php su
docker-php-ext-install intl
```
#if gd not available 
```
docker exec -it php su

apt-get update && \
    apt-get install -y \
        zlib1g-dev libpng-dev\
    && docker-php-ext-install gd
```

RELOAD PAGE LOCALHOST/ ADMINPANEL
