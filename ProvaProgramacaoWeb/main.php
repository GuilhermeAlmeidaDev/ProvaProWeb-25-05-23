<?php
include "models/Bebidas.php";
include "models/BebidaAlcoolica.php";
include "models/BebidaNaoAlcoolica.php";


// Função polimórfica
function exibirInformacoesBebida(Bebida $bebida) {
    return $bebida->exibirInformacoes();
}

// Uso das classes e métodos
$bebidaAlcoolica = new BebidaAlcoolica("Cerveja", 5.99, 5.0);
echo exibirInformacoesBebida($bebidaAlcoolica) . "\n";
echo "Teor Alcoólico: " . $bebidaAlcoolica->calcularTeorAlcoolico() . "%\n";

$bebidaNaoAlcoolica = new BebidaNaoAlcoolica("Refrigerante", 3.49);
echo exibirInformacoesBebida($bebidaNaoAlcoolica) . "\n";
echo "Teor Alcoólico: " . $bebidaNaoAlcoolica->calcularTeorAlcoolico() . "%\n";

echo "Método estático: " . Bebida::exibirInformacoesEstaticas() . "\n";
?>
