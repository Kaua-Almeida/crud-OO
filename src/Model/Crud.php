<?php
namespace App\Model;
use PDO;
use App\Model\Produtos;

require_once "../../vendor/autoload.php";
class Crud
{
    private PDO $conexao;
    public function __construct(PDO $conexao)
    {
      $this->conexao = $conexao;
    }

    public function create(Produtos $produto)
    {

        $descricao = $produto->getDescricao();
        $preco = $produto->getPreco();
        

        $stmt = $this->conexao->prepare("INSERT INTO `produtosestoque`( `valor`, `descricao`) VALUES ('$preco','$descricao')");
        $stmt->execute();

    }
    public function getAll(){
      $stmt = $this->conexao->prepare("SELECT * FROM `produtosestoque`");
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

