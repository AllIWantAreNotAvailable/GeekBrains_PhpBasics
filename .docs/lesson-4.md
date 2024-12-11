# Практическая работа к 4-му семинару

## Задание 1

> Придумайте класс, который описывает любую сущность из предметной области библиотеки: книга, шкаф, комната и т.п.
>

## Задание 2

> Опишите свойства классов из п.1 (состояние).
>

## Задание 3

> Опишите поведение классов из п.1 (методы).
>

## Задание 4

> Придумайте наследников классов из п.1. Чем они будут отличаться?
>

## Задание 5

> Создайте структуру классов ведения книжной номенклатуры:
> - есть абстрактная книга;
> - есть цифровая книга, бумажная книга;
> - у каждой книги есть метод получения на руки.
>
> У цифровой книги надо вернуть ссылку на скачивание, а у физической – адрес библиотеки, где ее можно получить. У всех
> книг формируется в конечном итоге статистика по кол-ву прочтений. Что можно вынести в абстрактный класс, а что надо
> унаследовать?


Задание 6

> Дан код:
> 
```PHP
class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}
$a1 = new A();
$a2 = new A();
$a1->foo();
$a2->foo();
$a1->foo();
$a2->foo();
```

> Что он выведет на каждом шаге? Почему?
> 
> Немного изменим п.5
> 
```PHP
class A {
public function foo() {
static $x = 0;
echo ++$x;
}
}
class B extends A {
}
$a1 = new A();
$b1 = new B();
$a1->foo();
$b1->foo();
$a1->foo();
$b1->foo();
```

> Что он выведет теперь?
> 