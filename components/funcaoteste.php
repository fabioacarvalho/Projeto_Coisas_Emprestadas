<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas Emprestadas</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <?php 
        $nomeProduto = $_GET["nomeProduto"];
        $categoriaProduto = $_GET["categoriaProduto"];
        $quantidadeProduto = $_GET["qtdeProduto"];
        echo "Temos: $nomeProduto";
    ?>
</body>
</html>