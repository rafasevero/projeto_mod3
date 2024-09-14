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

//instanciando manualmente

// criando humano
/*
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
*/

//instanciando por meio de um menu

$humanos = [];
$animais = [];
$produtos = [];

do {
    echo "\nMenu Principal:\n";
    echo "1. Adicionar Humano\n";
    echo "2. Adicionar Animal\n";
    echo "3. Adicionar Produto\n";
    echo "4. Realizar Venda\n";
    echo "5. Sair\n";
    $opcao = readline("Escolha uma opção: ");

    switch ($opcao) {
        case 1:
            // Adicionar Humano
            $nome = readline("Digite o nome do humano: ");
            $idade = readline("Digite a idade do humano: ");
            $endereco = readline("Digite o endereço do humano: ");
            $contato = readline("Digite o contato do humano: ");
            $novoHumano = new Humano($nome, $idade, $endereco, $contato);
            $humanos[] = $novoHumano;
            echo "Humano adicionado: " . $novoHumano->nome . "\n";
            break;

        case 2:
            // adicionar Animal
            $nome = readline("Digite o nome do animal: ");
            $raca = readline("Digite a raça do animal: ");
            $quant_pata = readline("Digite a quantidade de patas do animal: ");
            $cor = readline("Digite a cor do animal: ");
            $peso = readline("Digite o peso do animal: ");
            $tamanho = readline("Digite o tamanho do animal (pequeno, médio, grande): ");
            $nomeHumano = readline("Digite o nome do humano associado: ");
            

            // encontrar o humano associado
            $humanoAssociado = null;
            foreach ($humanos as $humano) {
                if ($humano->nome == $nomeHumano) {
                    $humanoAssociado = $humano;
                    break;
                }
            }
            
            if ($humanoAssociado) {
                $novoAnimal = new Animal($nome, $raca, $quant_pata, $cor, $peso, $tamanho, $humanoAssociado);
                $animais[] = $novoAnimal;
                echo "Animal adicionado: " . $novoAnimal->nomeAnimal . "\n";
            } else {
                echo "Humano associado não encontrado.\n";
            }
            break;

        case 3:
            // adicionar Produto
            $produtoNome = readline("Digite o nome do produto: ");
            $valor = readline("Digite o valor do produto: ");
            $quantidade = readline("Digite a quantidade em estoque: ");
            $novoProduto = new Produto($produtoNome, $valor, $quantidade);
            $produtos[] = $novoProduto;
            echo "Produto adicionado: " . $novoProduto->listarProduto();
            break;

        case 4:
            // realizar Venda
            $nomeProduto = readline("Digite o nome do produto: ");
            $quantidadeVenda = readline("Digite a quantidade vendida: ");
            
            // encontrar o produto
            $produto = null;
            foreach ($produtos as $p) {
                if ($p->produto == $nomeProduto) {
                    $produto = $p;
                    break;
                }
            }
            
            if ($produto) {
                $valor = $produto->valor * $quantidadeVenda;
                $novaVenda = new Venda($valor, $quantidadeVenda, $produto);
                echo "Venda realizada: " . $novaVenda->carrinho();
            } else {
                echo "Produto não encontrado.\n";
            }
            break;

        case 5:
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida. Tente novamente.\n";
            break;
    }
    print_r($humanos);
    print_r($animais);
    print_r($produtos);
    

} while ($opcao != 5);








