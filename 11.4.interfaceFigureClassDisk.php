<?php
/**
 * Создайте интерфейс Figure. 
 * Сделайте класс Disk (круг), реализующий интерфейс Figure.
 */

interface Figure
{
    public static function getSquare();
    public static function getPerimeter();
    public static function setLineColor($color);
    public static function getLineColor();
}

class Disk implements Figure
{
    private static $Pi = 3.14;
    private static $radius;
    private static $lineColor = 0x000000;

    public static function setRadius($radius)
    {
        if (!is_numeric($radius) || $radius <= 0) {
            echo 'Incorrect value of the radius!';
            return false;
        }
        self::$radius = $radius;
        return true;
    }
    public static function getRadius()
    {
        return self::$radius;
    }
    public static function getSquare()
    {
        return self::$Pi * self::$radius * self::$radius;
    }
    public static function getPerimeter()
    {
        return 2 * self::$Pi * self::$radius;
    }
    public static function setLineColor($color)
    {
        self::$lineColor = $color;
    }
    public static function getLineColor()
    {
        return self::$lineColor;
    }
}

Disk::setRadius(10);
Disk::setLineColor(0x00ff00);

echo 'Let\'s make circle with radius = '.Disk::getRadius();
echo '<br>';
echo 'Square of sircle = '.Disk::getSquare();
echo '<br>';
echo 'Color of circle = '.sprintf('0x%06x', Disk::getLineColor());
