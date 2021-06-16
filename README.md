# mk-symfony
EasyAdmin and News Page Preview

Установка
Выполнить ```docker-compose up -d``` из корневой папки mk-symfony

#Установка db mysql из корневой папки проекта
```
cat news.sql | docker exec -i mariadb /usr/bin/mysql -u root --password=rootpwd6421 news
```
```
docker exec -it app su
composer install
```
