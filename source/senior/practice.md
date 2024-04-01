---
title: Практичні завдання
description: Senior. Практичні завдання
extends: _layouts.documentation.ua
section: content
---

# Практичні завдання

## Який принцип порушено в коді та як можна виправити код?

```php
class Shape
{
    public $width;
    public $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}

class Triangle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }
}

class AreaCalculator
{
    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            if (is_a($shape, 'Square')) {
                $area[] = $shape->width * $shape->height;
            } else if (is_a($shape, 'Triangle')) {
                $area[] = $shape->radius * $shape->radius * pi();
            }
        }
    
        return array_sum($area);
    }
}
```

## Є масив зі 10 млн унікальних рядків. Програма отримує новий рядок, необхідно знайти всі рядки з масиву, що задовольняють критерій: відстань Левенштейна до нового рядка менше як 3 операції.

## Потрібно побудувати сервер посилання емейлів. Які б класи/шари/абстракції ви виділили?

## Як би ви реалізували скорочувалку урлів, стискач/розтискач зображень, парсер останніх повідомлень форуму, де згадується певний бренд, перевірку цін на товари у конкурентів?