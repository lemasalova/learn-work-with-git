<?php
abstract class Animal
{
    private $nickname;
    private $age;
    private $breed;

    function __construct($n, $a, $b)
    {
        $this->nickname = $n;
        $this->age = $a;
        $this->breed = $b;
    }
    function getNickname()
    {
        return $this->nickname;
    }
    function getAge()
    {
        return $this->age;
    }
    function getBreed()
    {
        return $this->breed;
    }
    function fly()
    {
        echo $this->nickname . ": I`m flying!";
    }
    function speak()
    {
        echo "...";
    }
}
class Cat extends Animal
{
    function run()
    {
        echo $this->getNickname() . ": I`m running!";
    }
    function speak()
    {
        echo "Meow";
    }
}
class Bird extends Animal
{
    function fly()
    {
        echo $this->getNickname() . ": I`m flying!";
    }
    function speak()
    {
        echo "Chirik-chirik";
    }
}

$barsik = new Cat("Barsik", 4, null);
$kesha = new Bird("Kesha", 4, null);

$barsik->run();
$kesha->fly();
$barsik->speak();
$kesha->speak();
