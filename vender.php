<?php

require_once 'produto.php';

class Venda {

    public $produto;
    public $valor;
    public $quant_venda;

    public function __construct($valor,$quant_venda,Produto $produto){
        $this->valor = $valor;
        $this->quant_venda = $quant_venda;
        $this->produto = $produto;
    }

    public function carrinho(){
        return"Nome produto: {$this->produto->produto}  quantidade {$this->quant_venda}, no valor de R$ {$this->valor}\n";
    }

}