<?php

require_once "animal.php";

    class Humano{
        public $nome;
        public $idade;
        public $endereco;
        public $contato;

        public function __construct($nome,$idade,$endereco,$contato){
            $this->nome = $nome;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->contato = $contato;
        }

        public function falarHumano(){
            return "Eu sou um humano :) \nNome: {$this->nome}\nIdade: {$this->idade}\nEndereço: {$this->endereco}\nContato: {$this->contato}\n";
        }

    }