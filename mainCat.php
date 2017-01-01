<?php
require_once "Cat.php";
$kitty1 = new Cat("Minny", "Beby");
$kitty2 = new Cat("Mutze", "2 Jears");
$kitty2->miew();
$kitty1->miew();
echo "<br>Кошка по имени $kitty1->Name имеет возраст $kitty1->Age";
echo "<br>Kошка по имени"; echo " $kitty2->Name"; echo " имеет возраст $kitty2->Age<br>";
$Tusja = new Animal();
$Nava = new Cat('Miu', 2);
$Nava->miew();
?>