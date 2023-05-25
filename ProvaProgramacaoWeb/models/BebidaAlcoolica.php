<?php
    // Classe que herda de Bebida (bebida alcoólica)
    class BebidaAlcoolica extends Bebida {
        private $teorAlcoolico;
    
        public function __construct($nome, $preco, $teorAlcoolico) {
            parent::__construct($nome, $preco);
            $this->teorAlcoolico = $teorAlcoolico;
        }
    
        public function calcularTeorAlcoolico() {
            return $this->teorAlcoolico;
        }
    
        public function exibirInformacoes() {
            return parent::exibirInformacoes() . ", Teor Alcoólico: " . $this->teorAlcoolico . "%";
        }
    }
?>