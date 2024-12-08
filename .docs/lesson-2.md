# Практическая работа к 2-му семинару

## Задание 1

> Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий –
> операция. Обязательно использовать оператор return.
>

### Решение

#### Код:

```PHP
function arithmetics($firstArgument, $secondArgument, $operation): float|int|null
{
    return match ($operation) {
        "+" => $firstArgument + $secondArgument,
        "-" => $firstArgument - $secondArgument,
        "*" => $firstArgument * $secondArgument,
        "/" => $firstArgument / $secondArgument,
        default => null,
    };
}

$firstInt = 1;
$secondInt = 2;

$addition = "+";
$subtraction = "-";
$multiplication = "*";
$division = "/";

var_dump(arithmetics($firstInt, $secondInt, $addition));
var_dump(arithmetics($firstInt, $secondInt, $subtraction));
var_dump(arithmetics($firstInt, $secondInt, $multiplication));
var_dump(arithmetics($firstInt, $secondInt, $division));
var_dump(arithmetics($firstInt, $secondInt, "OK"));
```

#### Вывод:

```SHELL
root@e66c2c0bea5b:/var/www/html# php /var/www/html/lesson-2_task-1.php 
/var/www/html/lesson-2_task-1.php:21:
int(3)
/var/www/html/lesson-2_task-1.php:22:
int(-1)
/var/www/html/lesson-2_task-1.php:23:
int(2)
/var/www/html/lesson-2_task-1.php:24:
double(0.5)
/var/www/html/lesson-2_task-1.php:25:
NULL
```

## Задача 2

> Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения
> аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из
> арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
>

### Решение

#### Код:

```PHP
function arithmetics($firstArgument, $secondArgument, $operation): float|int|null
{
    switch ($operation) {
        case "+":
            return $firstArgument + $secondArgument;
        case "-":
            return $firstArgument - $secondArgument;
        case "*":
            return $firstArgument * $secondArgument;
        case "/":
            return $firstArgument / $secondArgument;
        default:
            return null;
    }
}

$firstInt = 1;
$secondInt = 2;

$addition = "+";
$subtraction = "-";
$multiplication = "*";
$division = "/";

var_dump(arithmetics($firstInt, $secondInt, $addition));
var_dump(arithmetics($firstInt, $secondInt, $subtraction));
var_dump(arithmetics($firstInt, $secondInt, $multiplication));
var_dump(arithmetics($firstInt, $secondInt, $division));
var_dump(arithmetics($firstInt, $secondInt, "OK"));
```

#### Вывод:

```SHELL
root@e66c2c0bea5b:/var/www/html# php /var/www/html/lesson-2_task-2.php 
/var/www/html/lesson-2_task-2.php:26:
int(3)
/var/www/html/lesson-2_task-2.php:27:
int(-1)
/var/www/html/lesson-2_task-2.php:28:
int(2)
/var/www/html/lesson-2_task-2.php:29:
double(0.5)
/var/www/html/lesson-2_task-2.php:30:
NULL
```

#### Комментарии

Внутри функции `function arithmetics($firstArgument, $secondArgument, $operation)` в конструкции
`switch(condition) {case: $expresion; break;}` инструкция `break` упущено в связи с использованием инструкции `return`.


## Задача 3

> Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с
> названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
> - Московская область: Москва, Зеленоград, Клин;
> - Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт;
> - Рязанская область …
> 
> PS (названия городов можно найти на maps.yandex.ru).
> 

### Решение

#### Код:

```PHP
$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Скопин']
];

foreach ($regions as $region => $cities) {
    echo "$region: " . implode(', ', $cities) . PHP_EOL;
}
```

#### Вывод:

```SHELL
root@e66c2c0bea5b:/var/www/html# php /var/www/html/lesson-2_task-3.php 
Московская область: Москва, Зеленоград, Клин
Ленинградская область: Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область: Рязань, Касимов, Скопин
```


## Задача 4

> Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские
> буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
> Написать функцию транслитерации строк.
> 

## Решение

### Код:

```PHP
<?php

$transliterationMap = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'y',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'kh',
    'ц' => 'ts',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shch',
    'ъ' => '',
    'ы' => 'y',
    'ь' => '',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya'
];

function transliterate(string $text, array $map): string
{
    // Используем функцию strtr для замены символов по карте
    return strtr($text, $map);
}

$input = 'Привет, мир!';
$output = transliterate(mb_strtolower($input), $transliterationMap); // Приводим к нижнему регистру для примера
var_dump($output);
```

### Вывод:

```SHELL
root@e66c2c0bea5b:/var/www/html# php /var/www/html/lesson-2_task-4.php 
/var/www/html/lesson-2_task-4.php:47:
string(12) "privet, mir!"
```


## Задача 5

> С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где:
> - $val – заданное число;
> - $pow – степень.
> 

### Решение

#### Код:

```PHP
function power($val, $pow): float|int
{
    if ($pow == 0) {
        return 1;
    }

    if ($pow < 0) {
        return 1 / power($val, -$pow);
    }

    return $val * power($val, $pow - 1);
}

var_dump(power(2, 3));
var_dump(power(5, 0));
var_dump(power(2, -2));
```

#### Вывод:
```SHELL
root@e66c2c0bea5b:/var/www/html# php /var/www/html/lesson-2_task-5.php 
/var/www/html/lesson-2_task-5.php:16:
int(8)
/var/www/html/lesson-2_task-5.php:17:
int(1)
/var/www/html/lesson-2_task-5.php:18:
double(0.25)
```


## Задача 6

> Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
> - 22 часа 15 минут;
> - 21 час 43 минуты.
> 


### Решение

#### Код:

```PHP
<?php

function getCurrentTimeWithWords(): string
{
    $hours = (int)date('H');
    $minutes = (int)date('i');

    $hoursWord = getWordForNumber($hours, ['час', 'часа', 'часов']);
    $minutesWord = getWordForNumber($minutes, ['минута', 'минуты', 'минут']);

    return "$hours $hoursWord $minutes $minutesWord";
}

function getWordForNumber(int $number, array $forms): string
{
    $mod10 = $number % 10;
    $mod100 = $number % 100;

    if ($mod100 >= 11 && $mod100 <= 19) {
        return $forms[2];
    }
    if ($mod10 === 1) {
        return $forms[0];
    }
    if ($mod10 >= 2 && $mod10 <= 4) {
        return $forms[1];
    }
    return $forms[2];
}

var_dump(getCurrentTimeWithWords());
```

#### Вывод:
```SHELL
root@e66c2c0bea5b:/var/www/html# php /var/www/html/lesson-2_task-6.php 
/var/www/html/lesson-2_task-6.php:31:
string(25) "21 час 42 минуты"
```
