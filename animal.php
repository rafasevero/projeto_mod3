<?php

require_once 'humano.php';

    class Animal{
        public $nomeAnimal;
        public $raca;
        public $quant_pata;
        public $cor;
        public $peso;
        public $tamanho;
        protected $humano;



        public function __construct($nomeAnimal,$raca,$quant_pata,$cor,$peso,$tamanho, Humano $nome){
            $this->nomeAnimal = $nomeAnimal;
            $this->raca = $raca ;
            $this->quant_pata = $quant_pata;
            $this->cor = $cor;
            $this->peso = $peso;
            $this->tamanho = $tamanho;
            $this->humano = $nome;
        }
        public function getHumano() {
            return $this->humano;
        }


        public function falarAnimal(){
            return "Eu sou um animal\n";
        }



    }

