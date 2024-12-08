# Практическая работа к 1-му семинару

## Задание 1

> Выполните код в контейнере PHP CLI и объясните, что выведет данный код и почему:
>
```PHP
<?php
$a = 5;
$b = '05';
var_dump($a == $b);
var_dump((int)'012345');
var_dump((float)123.0 === (int)123.0);
var_dump(0 == 'hello, world');
?>
```

### Решение

```SHELL
root@cd2ef7422183:/var/www/html# php --version
PHP 8.2.26 (cli) (built: Dec  3 2024 04:03:34) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.2.26, Copyright (c) Zend Technologies
    with Xdebug v3.4.0, Copyright (c) 2002-2024, by Derick Rethans
root@cd2ef7422183:/var/www/html# php /var/www/html/lesson-1_task-1.php 
/var/www/html/lesson-1_task-1.php:4:
bool(true)
/var/www/html/lesson-1_task-1.php:5:
int(12345)
/var/www/html/lesson-1_task-1.php:6:
bool(false)
/var/www/html/lesson-1_task-1.php:7:
bool(false)
```

```SHELL
root@d063718fc00a:/var/www/html# php --version
PHP 7.4.33 (cli) (built: Nov 15 2022 03:43:02) ( NTS )
Copyright (c) The PHP Group
Zend Engine v3.4.0, Copyright (c) Zend Technologies
root@d063718fc00a:/var/www/html# php /var/www/html/lesson-1_task-1.php 
bool(true)
int(12345)
bool(false)
bool(true)
```