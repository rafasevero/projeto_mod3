<?php

require_once 'humano.php';

class Funcionario extends Humano{

    public $cargo;

    public function __construct($nome,$idade,$endereco,$contato,$cargo){
        parent::__construct($nome,$idade,$endereco,$contato);
        $this->cargo = $cargo;
    }

    public function falarHumano(){
        return "O  {$this->nome} tem o cargo de  {$this->cargo} na Clínica Vet";
    }
}



