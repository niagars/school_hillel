<?php

include 'object.php';
include 'object2.php';
include 'object3.php';

// Клас Car, дві властивості - Size i Weight, виводимо гетером 100 і 200 для прикладу.
$test = new car();
$test -> setSize (100);
$test -> setWeight (200);
var_dump ($test->getSize());
echo "<br>";
var_dump ($test->getWeight());
echo "<br>";
// Абстрактна функція піднесення до степеня 5 в 2.
echo "stepen_";
var_dump($test->countStep(5,2));
echo "<br>";
echo "<br>";
echo "<br>";


// Підключаємо три підкласи для Car - engine (volume), fuel (usefuel), type(exvehicle). 
$test2 = new engine();
$test22 = new fuel();
$test23 = new type();

$test2 -> setVolume (2);
var_dump($test2 -> getVolume ()); //Початкове значення властивості volume
echo "<br>";
$test2 -> setSize (100);
print_r ($test2->getSize()); // Нове значення властивості size помножене на volume
echo "<br>";
$test22 -> setUsefuel (2);
var_dump($test22 -> getUsefuel ()); //Початкове значення властивості usefuel
$test22 -> setWeight (200);
echo "<br>";
print_r ($test22->getWeight()); // Нове значення властивості weight помножене на usefuel
echo "<br>";
$test23 -> setExvehicle ('universal');
var_dump($test23 -> getExvehicle ()); //Початкове значення властивості exvehicle
echo "<br>";
$test23 -> setSize (100);
print_r ($test23->getSize()); //Додаю int + string
echo "<br>";
echo "<br>";
echo "<br>";


//Підключаємо по два класи до класів 1 рівня, до третього - type() не підключаємо, тому що визначили його властивість $exvehicle як private
$test3 = new type_eng ();
$test32 = new horsepow ();
$test33 = new type_fuel ();
$test34 = new tank ();

$test3 -> setModel ('dizel');
var_dump ($test3 -> getModel()); //Початкове значення властивості model
echo "<br>";
$test3 -> setVolume (3);
print_r ($test3 -> getVolume()); // Нове значення властивості volume 
echo "<br>";
$test3 -> setSize (100);
print_r ($test3->getSize()); // Нове значення властивості size
echo "<br>";
echo "<br>";
$test32 -> setHorsevolume (133);
var_dump ($test32 -> getHorsevolume()); //Початкове значення властивості Horsevolume
echo "<br>";
$test32 -> setVolume (3);
print_r ($test32 -> getVolume()); // Нове значення властивості volume 
echo "<br>";
$test32 -> setSize (100);
print_r ($test32->getSize()); // Нове значення властивості size
echo "<br>";
echo "<br>";
$test33 -> setNamefuel ('petrol');
var_dump ($test33 -> getNamefuel()); //Початкове значення властивості Namefuel
echo "<br>";
$test33 -> setUsefuel (3);
print_r ($test33 -> getUsefuel()); // Нове значення властивості Usefuel 
echo "<br>";
$test33 -> setWeight (200);
print_r ($test33->getWeight()); // Нове значення властивості Weight 
echo "<br>";
echo "<br>";
$test34 -> setTankvol (33);
var_dump ($test34 -> getTankvol()); //Початкове значення властивості Tankvol
echo "<br>";
$test34 -> setUsefuel (3);
print_r ($test34 -> getUsefuel()); // Нове значення властивості Usefuel
echo "<br>";
$test34 -> setWeight (200);
print_r ($test34->getWeight()); // Нове значення властивості Weight
echo "<br>";


?>
