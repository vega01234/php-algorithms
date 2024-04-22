<?php 

    require 'clases/Person.php';

    $perso1 = new Person;

    $perso1->setName('Fernando');
    $perso1->lastname = 'Vega';
    $perso1->age = 18;

    echo "El nombre de la persona uno es: ". $perso1->getName() ." ". $perso1->getLastName(). " y su edad es $perso1->age.";
    