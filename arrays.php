<?php
$siglas = array(
    'ES', 
    'MG', 
    'RJ', 
    'SP', 
    'MT'
);
foreach($siglas as $valor) {
    var_dump($valor);
}

$estado = array(
    'Espirito Santo',
    'Minas Gerais',
    'Rio de Janeiro',
    'São Paulo',
    'Mato Grosso'
);
foreach($estado as $valor) {
    var_dump($valor);
}

$estadosBrasileiros = array(
    'ES' => 'Espirito Santo',
    'MG' => 'Minas Gerais',
    'RJ' => 'Rio de Janeiro',
    'SP' => 'São Paulo',
    'MT' => 'Mato Grosso'
);
foreach($estadosBrasileiros as $chave => $valor) {
    var_dump($chave. "-" .$valor);
}
?>