<?php
include '../../conexao/Conexao.php';

header("Access-Control-Allow-Origin: *");
header("Content-Text: application/json; charset=utf-8");

class Biblioteca extends Conexao {
    private $id;
    private $isbn;
    private $titulo;
    private $autor;
    private $edicao;
    private $categoria;

    function getId() {
        return $this -> id;
    }
    function getIsbn() {
        return $this -> isbn;
    }
    function getTitulo() {
        return $this -> titulo;
    }
    function getAutor() {
        return $this -> autor;
    }
    function getEdicao() {
        return $this -> edicao;
    }
    function getCategoria() {
        return $this -> categoria;
    }
    function setId() {
        $this -> id = $id;
    }
    function setIsbn() {
        $this -> isbn = $isbn;
    }
    function setTitulo() {
        $this -> titulo = $titulo;
    }
    function setAutor() {
        $this -> autor = $autor;
    }
    function setEdicao() {
        $this -> edicao = $edicao;
    }
    function setCategoria() {
        $this -> categoria = $categoria;
    }
    public function insert($obj){
        $sql = "INSERT INTO biblioteca(isbn,titulo, autor, edicao, categoria) VALUES (:isbn,:titulo,:autor,:edicao,:categoria)";
        $consulta = Conexao::prepare($sql);
        $consulta -> bindParam(':isbn', $obj -> getIsbn());
        $consulta -> bindParam(':titulo', $obj -> getTitulo());
        $consulta -> bindParam(':autor', $obj -> getAutor());
        $consulta -> bindParam(':edicao', $obj -> getEdicao());
        $consulta -> bindParam(':categoria', $obj -> getCategoria());
        return $consulta -> execute();
    }
    public function list(){
        $sql = "SELECT * FROM biblioteca";
        $consulta = Conexao::prepare($sql);
        $consulta -> execute();
        $livros -> array();
        while ($item = $consulta -> fetch()) {
            $livro = new Livro;
            $livro -> setId($item['id']);
            $livro -> setIsbn($item['isbn']);
            $livro -> setTitulo($item['titulo']);
            $livro -> setAutor($item['edicao']);
            $livro -> setEdicao($item['edicao']);
            $livro -> setCategoria($item['categoria']);
            array_push($livros, $livro);
        }
        return $livros;

    }
    public function update($obj, $id = null){
        $sql = "UPDATE biblioteca SET isbn = :isbn, titulo = :titulo, autor = :autor, edicao = :edicao, categoria = :categoria WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta -> bindParam(':isbn', $obj -> getIsbn());
        $consulta -> bindParam(':titulo', $obj -> getTitulo());
        $consulta -> bindParam(':autor', $obj -> getAutor());
        $consulta -> bindParam(':edicao', $obj -> getEdicao());
        $consulta -> bindParam(':categoria', $obj -> getCategoria());
        return $consulta -> execute();
    }
    public function delete($obj, $id = null){
        $sql = "DELETE FROM biblioteca WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta -> bindParam('id', $obj ->getId());
        $consulta -> execute();
    }
    public function find($id = null){
        $sql = "SELECT * FROM biblioteca WHERE id = :id";
        $consulta = Conexao::prepare($sql);
        $consulta -> bindParam(':id', $id);
        $consulta -> execute();
        $resultado = $consulta -> fetch();
        $this -> setId($resultado['id']);
        $this -> setIsbn($resultado['isbn']);
        $this -> setTitulo($resultado['titulo']);
        $this -> setAutor($resultado['autor']);
        $this -> setEdicao($resultado['edicao']);
        $this -> setCategoria($resultado['categoria']);

    }
    public function emprestimo(){
        if(isset($_POST['funcao']) && $_POST['funcao'] == 'Emprestimo'){
            $nome = $_REQUEST['nome'];
            $livroemp = $_REQUEST['livroemp'];
            $telefone = $_REQUEST['telefone'];
            $email = $_REQUEST['email'];
            $dataEmp = $_REQUEST['dataemp'];
            $dataDev = $_REQUEST['datadev'];
            $sql = "INSERT INTO emprestimo(nome, livroemp, telefone, email, dataemp, datadev) VALUES (:nome, :livroemp, :telefone, :email, :dataemp, :datadev)";
            $consulta = Conexao::prepare($sql);
            return $consulta -> execute();
        }
    }
}
?>