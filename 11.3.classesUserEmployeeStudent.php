<?php
/**
 * Реализуйте абстрактный класс User, 
 * а также классы Employee и Student, наследующие от него. 
 * Добавьте в ваш класс User абстрактный метод increaseRevenue (увеличение стипендии). 
 * Напишите реализацию этого метода в классах Employee и Student.
 */

abstract class User
{
    public $name;
    public $surname;
    public $birthday;

    public function __construct($name, $surname, $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
    }

    abstract public function increaseRevenue($revenue);
}

class Employee extends User
{
    public $position;
    public $salary;

    public function __construct($name, $surname, $birthday, $position, $salary)
    {
        parent::__construct($name, $surname, $birthday);
        $this->position = $position;
        $this->salary = $salary;
    }

    public function increaseRevenue($revenue)
    {
        $this->salary = $this->salary + $revenue;
    }
}

class Student extends User
{
    public $course;
    public $faculty;
    public $stipend;
    
    public function __construct($name, $surname, $birthday, $course, $faculty, $stipend)
    {
        parent::__construct($name, $surname, $birthday);
        $this->course = $course;
        $this->faculty = $faculty;
        $this->stipend = $stipend;
    }

    public function increaseRevenue($revenue)
    {
        $this->stipend = $this->stipend + $revenue;
    }
}

$employee1 = new Employee('Jhon', 'Malcovich', '1990-10-12', 'engeneer', 2450);

echo 'Employee '.$employee1->name.' '.$employee1->surname.' has salary '.$employee1->salary;
echo '<br> Let\'s increase the salary by 125<br>';
$employee1->increaseRevenue(125);
echo 'Now employee '.$employee1->name.' '.$employee1->surname.' has salary '.$employee1->salary;
echo '<hr>';

$student1 = new Student('Alex', 'Merfy', '2001-12-15', 1, 'Economics', 780);

echo 'Student '.$student1->name.' '.$student1->surname.' has stipend '.$student1->stipend;
echo '<br> Let\'s increase the stipend by 20.5<br>';
$student1->increaseRevenue(20.5);
echo 'Now student '.$student1->name.' '.$student1->surname.' has stipend '.$student1->stipend;
