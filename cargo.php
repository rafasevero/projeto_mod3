<?php

require_once 'funcionario.php';

class Cargo extends Funcionario{

    public $salario;

    public function __construct($nome,$idade,$endereco,$contato,$cargo,$salario){
        parent::__construct($nome,$idade,$endereco,$contato,$cargo);
        $this->salario = $salario;
    }

    public function falarHumano(){
        return "O  {$this->nome} tem o cargo de  {$this->cargo} na Clínica Vet e ganha R$ {$this->salario} mensalmente";
    }
}