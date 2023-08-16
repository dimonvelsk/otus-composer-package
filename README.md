# Вывод текущего времени

Описание

## Требования

PHP 8.1

## Установка

````bash
$ composer require dimonvelsk/otus-composer-package
````

## Использование

````php
<?php
$time = new Timer();
echo $time->getSeconds();
````