<!DOCTYPE html>
<html lang="pt=BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <form action="../../controller/estoque/estoque.controller.php" method="post" enctype="multipart/form-data">
        <center>
            Nome do produto: <input type="text" name="nome_produto" id=""><br>
            <br>
            marca<input type="text" name="marca" id=""><br>
            <br>
            Preco<input type="number" name="preco" id=""><br>
            <br>
            Quantia<input type="number" name="quantia" id=""><br>
            <br>
            Quantia Minima<input type="number" name="quantia_minima" id=""><br>
            <br>
            <input type="submit" value="Cadastrar">
        </center>
    </form>
    <br>
    <?php
        require_once "../../model/estoque/estoque.PDO.php";
        $estoque = new Table_Estoque();
        $estoque->listarEstoque();
    
    ?>

</body>

</html>