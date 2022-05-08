<?php
class Person
{
    private $name; //инкапсуляция запрещает изменеия
    private $lastname;
    private $age;
    private $mother;
    private $father;
    private $sister;
    private $brother;
    private $hp;

    function __construct($name, $lastname, $age, $mother = null, $father = null,  $sister, $brother = null)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->age = $age;
        $this->mother = $mother;
        $this->father = $father;
        $this->sister = $sister;
        $this->brother = $brother;
        $this->hp = 100;
    }
    function sayHi($name)
    {
        return "Hi $name, I am " . $this->name;
    }
    function setHp($hp)
    {
        if ($this->hp + $hp >= 100) $this->hp = 100;
        else $this->hp = $this->hp + $hp;
    }
    function getHp()
    {
        return $this->hp;
    }
    function getName()
    {
        return $this->name;
    }
    function getLastname()
    {
        return $this->lastname;
    }
    function getMother()
    {
        return $this->mother;
    }
    function getFather()
    {
        return $this->father;
    }

    function getSister()
    {
        return $this->sister;
    }
    function getBrother()
    {
        return $this->brother;
    }

    function getInfo()
    {
        return $this->getBrother;

        //     return "
        //     <h3>A few words about myself:</h3><br>" . "My name is: " . $this->getName() . "<br> my lastname is: " . $this->getLastname() .
        //         "<br> my father is: " . $this->getFather()->getName() . "<br> my mother is: " . $this->getMother()->getName() . "<br> my 
        //     grandmother is: " . $this->getMother()->getMother()->getName() . "<br> my grandfathers is: " . $this->getMother()->getFather()
        //         ->getName() . " and " . $this->getFather()->getFather()->getName();

        //     // . "<br> my sister and brother: " . $this->getSister()
        //     // ->getName() . " and " . $this->getBrother()->getName();
    }
}
//Здоровье человека не может быть больше 100.
$anatoly = new person("Anatoly", "Utkin", 66); //Дедушка
$evgeny = new Person("Evgeny", "Masalov", 63); //Дедушка
$tatyana = new Person("Tatyana", "Masalova", 63); //Бабушка


$maksim = new Person("Maksim", "Utkin", 39, null, $anatoly);
$lyubov = new Person("Lyubov", "Masalova", 39, $tatyana, $evgeny);
$kira = new Person("Kira", "Utkina", 14, $lyubov, $maksim, $vika, $gleb);
$vika = new Person("Vika", "Utkina", 7, $lyubov, $maksim, $kira, $gleb);
$gleb = new Person("Gleb", "Utkin", 5, $lyubov, $maksim, $kira, $vika);

// echo $kira->getInfo();



// echo $kira->getMother()->getName() . "<br>"; //Получаем имя мамы Киры
// echo $kira->getMother()->getFather()->getName() . "<br>"; //Получаем имя дедушки Киры по маминой линии
// echo $kira->getFather()->getFather()->getName(); //Получаем имя дедушки Киры по папиной линии

// echo $kira->getInfo();


//$igor = new Person("Igor", "Petrov", 38);

//echo $alex->sayHi($igor->name);
//$alex->name = "Alex";
//echo $alex->name;
// $medKit = 50;
// // echo $alex->hp . "<br>";
// $alex->setHp(-30); //Упал
// echo $alex->getHp() . "<br>";
// $alex->setHp($medKit);
// echo $alex->getHp();


// Задача на практическую часть:
// Создать как минимум 2 бабушки, 2 дедушки по линии каждого из родителей.
// Вывести на экран информацию о всей родне сына