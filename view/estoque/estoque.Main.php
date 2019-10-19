<!DOCTYPE html>
<html lang="pt=BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="../../controller/estoque/estoque.controller.php" method="post" enctype="multipart/form-data">
        Nome do produto<input type="text" name="nome_produto" id=""><br>
        marca<input type="text" name="marca" id=""><br>
        Preco<input type="number" name="preco" id=""><br>
        Quantia<input type="number" name="quantia" id=""><br>
        Quantia Minima<input type="number" name="quantia_minima" id=""><br>
        <input type="submit" value="Cadastrar">


    </form>
</body>

</html>