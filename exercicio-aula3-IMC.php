<?php

$peso = 88;
$altura = 1.80;

$imc = $peso / ($altura * $altura);

if ($imc < 18.5) {
    echo "Magreza IMC = $imc\n";
} elseif ($imc > 18.5 && $imc < 24.9) {
    echo "Peso Normal IMC = $imc\n";
} elseif ($imc > 25 && $imc < 29.9) {
    echo "Sobrepeso IMC = $imc\n";
} elseif ($imc > 30 && $imc < 39.9) {
    echo "Obesidade IMC = $imc\n";
} elseif ($imc > 40) {
    echo "Obesidade Grave IMC = $imc\n";
} 


// Menor que 18,5: Magreza
// Entre 18,5 e 24,9: Peso normal
// Entre 25,0 e 29,9: Sobrepeso
// Entre 30,0 e 39,9: Obesidade
// Maior que 40,0: Obesidade Grave