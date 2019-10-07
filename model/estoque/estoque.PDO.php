<?php
require_once "../../model/pdo.Banco.class.php";


class Table_Estoque extends Banco
{
    function insertEstoque(Estoque $Estoque)
    {
        global $pdo;
        global $verificar;
        $bd = new Table_Estoque();
        $bd->conectar();
        $sql = $pdo->prepare("INSERT INTO `estoque`(
        `nome`,
        `marca`,
        `preco`,
        `quantia`
        `quantia_min`
    )
    VALUES(?, ?, ?, ?)");
        $sql->execute(array($Estoque->getNome(), $Estoque->getMarca(),  $Estoque->getPreco(),$Estoque->getQuantia(), $Estoque->getQuantia_min()));
    }
}
