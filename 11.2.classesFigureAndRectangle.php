<?php
/**
 * Создайте абстрактный класс Figure, 
 * наследуйте от данного класса класс Rectangle, 
 * у которого будет два приватных свойства: 
 * $a для ширины и $b для длины. 
 * Выведите площадь прямоугольника длиной 100 и шириной 200.
 */

abstract class Figure 
{
    abstract public function getSquare();
    abstract public function getPerimeter();
}

class Rectangle extends Figure
{
    private $a; // a - width
    private $b; // b - length

    public function __construct($width, $length) 
    {
        $this->a = $width;
        $this->b = $length;
    }

    public function getSquare()
    {
        return $this->a * $this->b;
    }
    public function getPerimeter()
    {
        return 2 * $this->a + 2 * $this->b;
    }
}

$rect = new Rectangle(100, 200);

echo 'Square of rectangle = ';
echo $rect->getSquare();