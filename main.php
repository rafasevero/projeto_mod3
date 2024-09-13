<?php

require_once 'animal.php';
require_once 'texugo.php';
require_once 'guaxinim.php';
require_once 'sagui.php';
require_once 'vet.php';
require_once 'balconista.php';
require_once 'vendedor.php';
require_once 'vender.php';
require_once 'produto.php';


// criando humano
$humano1 = new Humano("Rafaela Severo",17,"rua dos alfeneiros","40028922");
$humano2 = new Humano("Louis",22,"rua das galinhas","400232321");
$humano3 = new Humano("Hugh Jackman",45,"rua dos patinhos","99965743");


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

$salario1 = 7500;
$salario2 = 2000;
$salario3 = 3500;

$humano4 = new Veterinario("Frederico",33,"Costa e Silva",90876342,"veterinário",$salario1);
echo $humano4->falarHumano();


$humano5 = new Balconista("Luisa",26,"Rio Bonito",876321384,"balconista",$salario2);
echo $humano5->falarHumano();

$humano6 = new Vendedor("Julia",22,"Atiradores",876232145,"vendedor",$salario3);
echo $humano6->falarHumano();

$produto1 = new Produto("Ração",26,100);
echo $produto1->listarProduto();

$venda1 = new Venda(26,1,$produto1);
echo $venda1->carrinho();








