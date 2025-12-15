<?php
use App\Model\Crud;
use App\Model\Produtos;
use App\Conexao\Conexao;
require_once "../../vendor/autoload.php";
if (isset($_POST["descricao"], $_POST["preco"])) {
    try {
        if (!$_POST["descricao"] == "" or !$_POST["preco"] == "") {
            $preco = htmlspecialchars($_POST["descricao"]);
            $descricao = htmlspecialchars($_POST["descricao"]);
            $produto = new Produtos($preco, $descricao);
            if ($crud = new Crud(Conexao::conexao())) {
                $crud->create($produto);
                echo "Produto criado com sucesso";
                
            } else {
                throw new \Exception("erro ao enviar");
            }
        } else {
            echo "Dados em branco";
            die();
        }





    } catch (Exception $e) {
        echo $e->getMessage();
    }




} else {
    echo "erro";
}