<?php

$caminhoArquivo = __DIR__ . '/filme.json';
$filmes = file_get_contents($caminhoArquivo, true);
$filme = json_decode($filmes);

var_dump($filme);