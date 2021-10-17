<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coisas Emprestadas</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
     <section class="containerbody">
         <!-- Cabeçalho -->
        <header id="header">
            <a id="logo" href="../home.php">Coisas Emprestadas</a>
            <nav id="nav">
                <!-- Menu Haburguer -->
                <button id="btn-mobile" aria-label="Abril Menu" aria-haspopup="true" aria-controls="menu">Menu
                    <span id="hamburguer" aria-expanded="false"></span>
                </button>
                <ul id="menu" role="menu">
                    <li><a href="./cadastro.php"><strong>Cadastro</strong></a></li>
                    <li><a href="./produtos.php">Produtos</a></li>
                    <li><a href="./dashboard.php">Dashboard</a></li>
                    <li><a href="#">Adminstrativo</a></li>
                    <li><a href="./config/logout.php">Sair</a></li>
                </ul>
            </nav>
        </header>
            <p id="titulo-lista">CADASTRO DE PRODUTOS</p>
            <section  class="produtos">
                <form action="" method="POST">
                    <label>Nome:</label>
                    <input class="campos" type="text" name="nomeUsuario" value="">
                    <label>Produto:</label>
                    <input class="campos" type="text" name="nomeProduto" placeholder="Digite o produto..." value="">
                    <label>Data devolução:</label>
                    <input class="campos" type="date" name="dataDevolucao" placeholder="Digite a data de devolucao..." value="">
                    
                    <div id="container-btn">
                        <input class="campos" type="submit" value="Emprestar" id="btn-cadastro">
                    </div>
                </form> 
            </section>
     </section>


</body>
</html>