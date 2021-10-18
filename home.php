<?php 
    include_once("./config/protect.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas Emprestadas</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/animacoes.css">
</head>
<html>
<body>

    <main id="mainIndex">
        
        <!-- Cabeçalho -->
        <header id="header">
            
            <a id="logo" href="./home.php">Coisas Emprestadas</a>
            <p><strong>Bem Vindo: </strong><?php echo $_SESSION['nome']  ?></p>
            <nav id="nav">
                <!-- Menu Haburguer -->
                <button id="btn-mobile" aria-label="Abril Menu" aria-haspopup="true" aria-controls="menu">Menu
                    <span id="hamburguer" aria-expanded="false"></span>
                </button>
                <ul id="menu" role="menu">
                    <li><a href="./paginas/cadastro.php">Cadastro</a></li>
                    <li><a href="./paginas/produtos.php">Produtos</a></li>
                    <li><a href="./paginas/dashboard.php">Dashboard</a></li>
                    <li><a href="#">Adminstrativo</a></li>
                    <li><a href="./config/logout.php">Sair</a></li>
                </ul>
            </nav>
            
        </header>
        <p id="titulo-lista">LISTA DE EMPRESTIMOS</p>
        <section id="lista">
<?php
    include "./config/conexao.php";

    $sql = "SELECT nomeProduto, categoria, nomeUsuario, dataDev FROM produtos INNER JOIN emprestimos INNER JOIN usuarios WHERE emprestimos.idUsuario = usuarios.idUsuario and emprestimos.idProduto = produtos.idProduto ORDER BY emprestimos.idRegistro DESC";

    $sql_query = $mysqli->query($sql) or die("ERRO ao consultar " . $mysqli->error);
    
    if($sql_query->num_rows == 0) {
        echo "Nenhum resultado encontrado.";
    } else {
        while($dados = $sql_query->fetch_assoc()) {
            ?>

            
                <section class="item-lista">
                    <p class="titulo-produto-lista"><?php echo$dados['nomeProduto'] ?></p>
                    <div >
                        <p>Nome: <?php echo$dados['nomeUsuario'] ?></p>
                        <p>Devolução: <?php echo$dados['dataDev'] ?></p>
                        <button>Devolver</button>
                    </div>
                </section>
            
            
    <?php
        }
    };

?>
    </section>

<script src="js/navbar-js.js"></script>

</body>
</html>
        