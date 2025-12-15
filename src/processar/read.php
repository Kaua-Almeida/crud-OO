<?php
use App\Model\Crud;
use App\Model\Produtos;
use App\Conexao\Conexao;
require_once "../../vendor/autoload.php";

if ($crud = new Crud(Conexao::conexao())) {
    try {
        if( $data = $crud->getAll())
        {
            foreach ($data as $key ) {
                echo "<pre>";
               echo "". $key["descricao"] ."";
                echo "<pre>";
            }
            
        }
      else{
        throw new Exception("Error Processing Request", 1);
        
      }
    
    } catch (\Throwable $th) {
       echo $th->getMessage();
    }
 
    

}