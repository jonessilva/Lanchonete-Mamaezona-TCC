<?php
$bd = new Table_Estoque();
class Estoque
{
    private $nome;
    private $marca;
    private $preco;
    private $quantia;
    private $quantia_min;
    //Setters
    function setNome($n)
    {
        $this->nome = $n;
    }
    function setMarca($m)
    {
        $this->marca = $m;
    }
    function setPreco($p)
    {
        $this->preco = $p;
    }
    function setQuantia($q)
    {
        $this->quantia = $q;
    }
    function setQuantia_min($qm)
    {
        $this->nome = $qm;
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
    private function dadosEstoque($nome, $marca, $preco, $quantia, $quantia_min)
    {
        $this->setNome($nome);
        $this->setMarca($marca);
        $this->setPreco($preco);
        $this->setQuantia($quantia);
        $this->setQuantia_min($quantia_min);
    }
    final function cadastroCliente($nome, $situacao, $descricao, $tipo)
    {
        global $bd;
        $this->dadosCliente($nome, $situacao, $descricao, $tipo);
        $bd->insertCliente($this);
    }
}