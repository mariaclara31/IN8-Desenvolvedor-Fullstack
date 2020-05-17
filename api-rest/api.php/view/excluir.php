<?php
include '../../control/BibliotecaControl.php';
header('Location:listar.php');

$data = file_get_contents('php://input');
$obj = json_decode($data);

$id = $obj -> id;

if (!empty($data)){
    $bibliotecaControl = new BibliotecaControl();
    $bibliotecaControl -> delete($obj, $id);
}
?>