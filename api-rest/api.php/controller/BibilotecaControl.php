<?php
include'../../model/Biblioteca.php';

class BibliotecaControl {
    function insert($obj){
        $biblioteca = new Biblioteca();
        return $biblioteca -> insert($obj);
    }
    function list(){
        $biblioteca = new Biblioteca();
        $biblioteca = $biblioteca -> list();
        return $biblioteca -> findAll();
    }
    function update($obj, $id){
        $biblioteca = new Biblioteca();
        return $biblioteca -> update($obj, $id);
    }
    function delete($obj, $id){
        $biblioteca = new Biblioteca();
        return $biblioteca -> delete($obj, $id);
    }
    function find($id = null){

    }
    function empresta($obj){
        $biblioteca = new Biblioteca();
        return $biblioteca -> empresta($obj, $id);
    }
}