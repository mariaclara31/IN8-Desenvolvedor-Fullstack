<?php
include '../../control/BibliotecaControl.php';
$bibliotecaControl = new BibliotecaControl();

header('Context-Type: application/json');

foreach($bibliotecaControl -> findAll() as $livro){
    echo json_encode($livro);
}
?>
