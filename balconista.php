<?php

require_once 'funcionario.php';

class Balconista extends Funcionario{

    public $cargo;

    public function __construct($nome,$idade,$endereco,$contato,$cargo){
        parent::__construct($nome,$idade,$endereco,$contato,$cargo, 2000);
        $this->cargo = $cargo;
    }

    public function falarHumano(){
        return "O  funcionário {$this->nome} tem o cargo de  {$this->cargo} na Clínica Vet e ganha R$ {$this->salario} mensalmente\n";
    }
}