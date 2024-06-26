---
title: Практичні завдання
description: Junior. Практичні завдання
extends: _layouts.documentation.ru
section: content
---

# Практичні завдання

## Спроєктуйте базу даних для зберігання інформації про книги та їхніх авторів. Напишіть запит для вибірки всіх авторів і кількості написаних ними книг.

## Є матриця 3×3. Порахуйте діагоналі, тільки парні/непарні числа в діагоналях.

## Ваш застосунок видає 500 помилку. Опишіть послідовність пошуку проблеми.

## Напишіть функцію, яка визначає, чи слово є паліндромом.

## Який результат видасть такий код:

```php
If (-1) print "True" else print "False"
```

## Який результат видасть такий код:

```php
$a = 3; $b = 2;
echo (int) $a / (int) $b;
```

## Який результат видасть такий код:

```php
var_dump (array_merge ([2 => 'a'], [3 => 'b']));
```

## Є масив товарів у випадковому порядку із вказанням виробників. Напишіть метод для його сортування, щоб максимальна кількість перших товарів відповідала такому критерію: кожний наступний товар мав виробника, відмінного від попереднього.

## Чому буде дорівнювати $ x після виконання виразу $ x = 1 + «1%» + «$ 1»?

## Є масив Integer, напишіть можливі способи, як збільшити кожен елемент на одиницю (+1).

## Схематично реалізувати структуру (класи) для завдання:

* Створити API для розміщення постів у Facebook та Google.
* URL для розміщення постів Google www.google.com/new-post?text=
* URL для розміщення постів Google facebook.com/add-post?message=

##  Є таблиці 2×3 і 3×2. Select * from a, b. Яка розмірність результату?

| Order |         |       |
|:-----:|:-------:|:-----:|
| id    | user_id | money |

| User |       |
|:----:|:-----:|
| id   | email |

До таблиці є запити:

- всі юзери з конкретного міста;
- всі видалені користувачі;
- всі видалені користувачі з конкретного міста. 

Які індекси для таблиці найкраще поставити?

|  User   |                |
|:-------:|:--------------:|
| city_id | deleted (bool) |

## Напишіть запит для збільшення значення column1 на +1 для id = 2

| id | column1 |
|----|---------|
| 1  | 1       |
| 2  | 2       |

## Напишіть цикл for так, щоб аргумент циклу змінювався в геометричній прогресії.

## Чому дорівнюють вирази:

```php
print (!! "false")

print (!! true)

print ((int) '125g7')

print ((int) 'x52')
```

## Який результат виконання функції? Як виправити результат?

```php
in_array (1, [0, '0', true])
```

## Напишіть клас з реалізацією всіх можливих способів суворої типізації даних з урахуванням можливостей PHP 7.4.

## Laravel

### Напишіть метод для зв’язку «багато до багатьох». У методі додайте умову для значення, яке збережено в поле проміжної таблиці. Наприклад, є студенти та курси, на які вони записалися. Запис студента на курс повинен бути підтверджений. Підтвердження зберігається в проміжній таблиці як is_approve. Для моделі студентів має бути метод approvedCourses.

### Напишіть запит з використанням моделі Query Builder, який буде відповідати запиту:

```sql
Select * from `users` where ( 'age'> 21 and ( 'has_education' == 1 or 'work_experience'> 2))
```

### Напишіть artisan-команду для створення моделі та міграції для неї.

### Напишіть artisan-команду для очищення кешу фреймворку.