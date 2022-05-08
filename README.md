# FishTail
[![Minimum PHP Version](https://img.shields.io/badge/php-%3E%3D%208.1-8892BF.svg?style=flat-square)](https://php.net/)

Это приложение - сокращатель ссылок. Вы загружаете свою ссылку,
а сервис предоставляет вам ссылку-прокси для укорачивания оригинальной ссылки

## Установка

Скачайте локально приложение с github. 

Установите в директорию app [composer](https://getcomposer.org/download/), или воспользуйтесь собственным глобальным

Обновите зависимости : 

```
composer update
```

Установите docker
После его установки, запустите compose в `stuff`

Подключитесь к терминалу контейнера postgres

Зайдите в службу psql и исполните следующее 

``` 
CREATE DATABASE fish_tail
```

Выйдите из контейнера. Перейдите в `app`. 
Поднимите миграции: 

```
vendor/bin/phinx migrate -e dev  
```