<?php
    namespace App\Model;

class Produtos 
{
    private string $descricao;
    private string $preco;
    
    public function __construct(string $preco, string $descricao)
    {
        $this->preco = $preco;
        $this->descricao = $descricao;
    }
    public function getDescricao():string
    {
        return $this->descricao;
    }
     public function getPreco():string
    {
        return $this->preco;
    }
     public function setDescricao(string $descricao)
    {
         $this->descricao = $descricao;
    }
     public function setPreco(string $Preco)
    {
         $this->Preco = $Preco;
    }
}

