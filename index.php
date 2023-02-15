<?php
require 'user.php';
require 'voitures.php';

$user1= new User ("Ranya", "Majdi", 25, "Rabat");
echo $user1;

$user2= new User ("Yassine", "Mghazli", 25, "Marrakech");

echo $user2;

$car1= new Car ("Mercedes", "300", 250);
echo $car1;