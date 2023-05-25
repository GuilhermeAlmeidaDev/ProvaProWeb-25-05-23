<?php

// Classe abstrata para bebidas
abstract class Bebida {
    protected $nome;
    protected $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    abstract public function calcularTeorAlcoolico();

    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    public static function exibirInformacoesEstaticas() {
        return "Essa é uma bebida.";
    }

    public function exibirInformacoes() {
        return "Nome: " . $this->nome . ", Preço: $" . $this->preco;
    }
}

