<?php

require_once 'animal.php';
require_once 'texugo.php';
require_once 'guaxinim.php';
require_once 'sagui.php';
require_once 'cargo.php';


// criando humano
$humano1 = new Humano("Rafaela Severo",17,"rua dos alfeneiros","40028922");
$humano2 = new Humano("Louis",22,"rua das galinhas","400232321");
$humano3 = new Humano("Jackman",45,"rua dos patinhos","99965743");


//criando animal
$animal1 = new Guaxinim("Rakoon","Guaxinim-de-omoplata",4,"preto",6,"grande",$humano1);
echo $animal1->falarAnimal();
print_r($animal1);

$animal2 = new Texugo("Pipoca","Texugo-Europeu",6,"marronzinho",3,"médio",$humano2);
echo $animal2->falarAnimal();
print_r($animal2);

$animal3 = new Sagui("Saguizinho","Sagui-Prego",2,"branquinho",5,"pequeno",$humano3);
echo $animal3->falarAnimal();
print_r($animal3);

//printando
echo "Nome do humano: " . $humano1->nome . "\n";
echo $animal1->nomeAnimal . " está associado a " . $animal1->getHumano()->nome . ".\n";

echo "Nome do humano: " . $humano2->nome . "\n";
echo $animal2->nomeAnimal . " está associado a " . $animal2->getHumano()->nome . ".\n";

echo "Nome do humano: " . $humano3->nome . "\n";
echo $animal3->nomeAnimal . " está associado a " . $animal3->getHumano()->nome . ".\n";

$humano4 = new Cargo("Frederico",33,"Costa e Silva",90876342,"Veterinário",7500);
echo $humano4->falarHumano();






