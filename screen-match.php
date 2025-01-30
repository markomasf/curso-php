<?php

function exibeMensagemLancamento(int $ano){
    if ($ano >= 2024) {
        echo "Esse filme é um lançamento\n";
    } elseif ($ano > 2022 && $ano < 2024) {
        echo "Esse Filme ainda é novo\n";
    } else {
        echo "Esse filme não é mais lançamento.\n";
    }
}

function incluidoNoPlano(bool $planoPrime, int $anoLancamento ){
    return $planoPrime || $anoLancamento < 2020;
}

echo "Bem-vindo(a) ao Screen Match!\n";

$nomeFilme = "Top Gun - Maverick";
$nomeFilme = "Se beber não case";
$nomeFilme = "Thor: Ragnarok";

$anoLancamento = $argv[1] ?? 2022;
$somaNotas = 9;
$somaNotas += 6;
$somaNotas += 8;
$somaNotas += 7.5;
$somaNotas += 5;

$notaFilme = $somaNotas/5;
$planoPrime = true;

$incluidoNoPlano = incluidoNoPlano($planoPrime, $anoLancamento);

echo "Nome do filme: " . $nomeFilme . "\n";
echo "Média da Nota: " . $notaFilme. "\n";
echo "Ano de Lançamento: " . $anoLancamento . "\n";



// Match para casar informações

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-herói",
    "Se beber não case" => "Comédia"
};

echo "Genero do filme é: " . $genero . "\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "genero" => "super-herói"
];

exibeMensagemLancamento($anoLancamento);

echo $filme["ano"];