<?php
class Printer
{
    public function print(Animal $animal)
    {
        echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
    }
}
$dog = new Dog("Buddy");
$cat = new Cat("Kitty");
$printer = new Printer();
$printer->print($dog); // Output: Buddy says Woof!
$printer->print($cat); // Output: Kitty says Meow!