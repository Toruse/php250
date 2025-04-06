---
title: General
description: Junior. General issues
extends: _layouts.documentation.en
section: content
---

# General

## What is a reference?

References in PHP are a means to access the same variable content by different names. They are not like C pointers 
because in PHP they are symbol table aliases, and variable name and variable content are different, so the same content 
can have different names.

## What are the main operations using references?

Three basic operations can be performed with references: assign by reference, passing by reference, and return by reference.

### Assign By Reference

This is when one variable refers to the value of another variable, for example:

```php
<?php
    $a =& $b;
?>
```

Here, variables $a and $b point to the same value.

### Passing by Reference

To do this, two variables are created that reference the same content: one is passed to the function, and the other is 
passed to the scope of the call, for example:

```php 
<?php

function foo(&$var)
{
    $var++;
}

$a = 5;
foo($a);

?>
```

As a result, the function will change the value pointed to by the variable $a to 6. The reason is that in the function
foo the variable $var refers to the same content as the variable $a

### Return By Reference

Return by reference is used when you need to define a variable to which you want to bind a reference. An example with 
an object, where the variable $myValue is a reference to the object property $value:

```php 
<?php

class Foo
{
    public $value = 42;

    public function &getValue()
    {
        return $this->value;
    }
}

$obj = new Foo();
$myValue = &$obj->getValue(); 
$obj->value = 2;
echo $myValue;  // 2

?>
``` 

Another example:

```php 
<?php

function &collector()
{
  static $collection = array();
  return $collection;
}

$collection = &collector();
$collection[] = 'foo';

?>
```

## What are the simple types supported in PHP?

* __Scalar types:__
  * __bool__ - a logical type that accepts only two values, which express truth: true or false.
  * __int__ - integers.
  * __float__ - floating point numbers.
  * __string__ - a string, contains a set of characters, in which a character is the same as a byte.
* __array__ - an array, an ordered data structure that associates values ​​and keys.
* __object__ - objects, an entity with state and behavior, with fields and methods.
* __resource__ - a type that stores a reference to an external resource.
* __never__ - a type that means the function will stop working without returning a value.
* __void__ - a type that indicates that the function does not return a value.
* __null__

## Що таке інкремент і декремент, у чому різниця між префіксним і постфіксним інкрементом і декрементом?

## Що таке рекурсія?

## У чому різниця між =, == і ===?

## Які знаєте принципи ООП?

## Яка система типів використовується в PHP? Опишіть плюси та мінуси.

## Чим відрізняються ключові слова: include і require, mysql_connect і mysql_pconnect?

## Що таке інтерфейси? Чи використовуєте їх? Якщо так — розкажіть про це.

## Що таке абстрактний клас і чим він відрізняється від інтерфейсу?

## Чи може абстрактний клас містити приватний метод?

## Які модифікатори видимості є в РНР?

## Які магічні методи ви знаєте і як їх застосовують?

## Що таке генератори і як їх використовувати?

## Що робить оператор yield?

## Що таке traits? Альтернативне рішення? Наведіть приклад.

## Опишіть поведінку під час використання traits з однаковими іменами полів і/або методів?

## Чи будуть доступні приватні методи trait в класі?

## Чи можна компонувати traits в trait?

## Розкажіть про обробку помилок і винятки (try catch, finaly і throw).

## Що таке type hinting, як працює, навіщо потрібен?

## Що таке namespace’и та навіщо вони?

## Порівняння значень змінних у РНР і підводні камені? Приведення типів. Що змінилося в PHP 8 у цьому контексті?

## Як працює session у РНР, де зберігається, як ініціалізується?

## Суперглобальні масиви. Які знаєте? Як використовували?

## Порівняйте include vs required, include_once vs required_once.

## Що означає складність алгоритму?

## Що таке замикання в PHP? Наведіть приклад.

## Яка різниця між замиканням у PHP і JavaScript?

## Що таке пізнє зв’язування? Розкажіть про поведінку та застосування static.

## Як перевизначити зберігання сесій?

## Розкажіть про SPL-бібліотеку (Reflection, autoload, структури даних).

## Розкажіть про принципи SOLID.

## Розкажіть про шаблони GRASP.

## Розкажіть про Dependency Injection: що таке DI-контейнери? Які є варіанти реалізацій?

## Що вам відомо про MVC?

## Що вам відомо про шаблони GoF?

## Що вам відомо про шаблони, які застосовуються в ORM?

## Напишіть/розкажіть на PHP приклад реалізації патерну Singleton.

## Що таке Docker? Яким є принцип його роботи?

## Що таке LAMP/NAMP?

## Розкажіть про regexp.

## Розкажіть про SSH-протокол.

## Що таке PDO?

## Що нового з’явилося в PHP 8?

## Що таке PHP PEAR?

## Які версії PHP досі підтримуються?

## У чому різниця між GET і POST?

## Чим відрізняються оператори BREAK і CONTINUE?

## Чи є різниця між одинарними та подвійними лапками?

## Що таке Cookie і навіщо вони використовуються?

## Що не можна зберігати в Cookie і чому?

## Якому середовищу розробки віддаєте перевагу й чому?