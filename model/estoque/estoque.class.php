<?php
require_once "../../model/estoque/estoque.PDO.php";
$bd = new Table_Estoque();
class Estoque
{
    private $nome;
    private $marca;
    private $preco;
    private $quantia;
    private $quantia_min;
    //Setters
    function setNome($nm)
    {
        $this->nome = $nm;
        echo "$this->nome<br>
        $this->marca<br>
        $this->preco<br>
        $this->quantia<br>
        $this->quantia_min<br><br>";
    }

    function setMarca($marca)
    {
        $this->marca = $marca;
        
        echo "$this->nome<br>
        $this->marca<br>
        $this->preco<br>
        $this->quantia<br>
        $this->quantia_min<br><br>";
    }
    function setPreco($preco)
    {
        $this->preco = $preco;
        
        echo "$this->nome<br>
        $this->marca<br>
        $this->preco<br>
        $this->quantia<br>
        $this->quantia_min<br><br>";
    }
    function setQuantia($quantia)
    {
        $this->quantia = $quantia;
        
        echo "$this->nome<br>
        $this->marca<br>
        $this->preco<br>
        $this->quantia<br>
        $this->quantia_min<br><br>";   
    }
    function setQuantia_min($quantia_min)
    {
        $this->quantia_min = $quantia_min;
        
        echo "$this->nome<br>
        $this->marca<br>
        $this->preco<br>
        $this->quantia<br>
        $this->quantia_min<br><br>";
    }
    // Getters
    function getNome()
    {
        return $this->nome;
    }
    function getMarca()
    {
        return $this->marca;
    }
    function getPreco()
    {
        return $this->preco;
    }
    function getQuantia()
    {
        return $this->quantia;
    }
    function getQuantia_min()
    {
        return $this->quantia_min;
    }
    //-------------------------------------------------------------------------------------------------------
    private function dadosEstoque($_nome, $marca, $preco, $quantia, $quantia_min)
    {
        $this->setNome($_nome);
        $this->setMarca($marca);
        $this->setPreco($preco);
        $this->setQuantia($quantia);
        $this->setQuantia_min($quantia_min);
    }
    final function cadastroEstoque($nome_, $marca, $preco, $quantia, $quantia_min)
    {
        global $bd;
        $this->dadosEstoque($nome_, $marca, $preco, $quantia, $quantia_min);
        $bd->insertEstoque($this);
    }
}