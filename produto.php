<?php

class Produto{
    public $produto;
    public $valor;
    public $quant;

    public function __construct($produto,$valor,$quant){
        $this->produto = $produto;
        $this->valor = $valor;
        $this->quant = $quant;
    }

    public function listarProduto(){
        return "Nome do Produto: {$this->produto}, valor R$ {$this->valor}, quantidade  em estoque: {$this->quant}\n ";
    }
}