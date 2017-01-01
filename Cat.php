<?php
class Animal
{
public $Tip = "Cat";
public $Name;
public $Age;
}
class Cat extends Animal
{
public function __construct( $name, $age)
{
	$this->Name = $name;
	$this->Age = $age;
	echo "Запущен конструктор с аргументами для кота по имени ";
	echo "$this->Name <br>"; 
}
function miew()
{
	echo "Кот по имени "; echo "$this->Name"; echo " говорит МЯУ<br>";}
}

?>