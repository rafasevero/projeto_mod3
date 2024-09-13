<?php

require_once 'humano.php';

class Funcionario extends Humano{

    public $cargo;
    public $salario;

    public function __construct($nome,$idade,$endereco,$contato,$cargo, $salario = 1000){
        parent::__construct($nome,$idade,$endereco,$contato);
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function falarHumano(){
        return "O  {$this->nome} tem o cargo de  {$this->cargo} na Clínica Vet";
    }
}



