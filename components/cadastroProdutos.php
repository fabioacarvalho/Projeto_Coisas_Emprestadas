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
     <section class="containerbody">
         <!-- Cabeçalho -->
         <header id="header">
            <a id="logo" href="/index.php">Coisas Emprestadas</a>
            <nav id="nav">
                <!-- Menu Haburguer -->
                <button id="btn-mobile" aria-label="Abril Menu" aria-haspopup="true" aria-controls="menu">Menu
                    <span id="hamburguer" aria-expanded="false"></span>
                </button>
                <ul id="menu" role="menu">
                    <li><a href="/components/cadastro.php"><strong>Cadastro</strong></a></li>
                    <li><a href="/components/produtos.php">Produtos</a></li>
                    <li><a href="#">Dashboard</a></li>
                    <li><a href="#">Adminstrativo</a></li>
                </ul>
            </nav>
             </header>

            <p id="titulo-lista">CADASTRO DE PRODUTOS</p>
            <section  class="produtos">
                <form action="cadastroProdutos.php" method="get">
                    <label>Nome Produto:</label>
                    <input class="campos" type="text" name="nomeProduto" placeholder="Digite seu nome...">
                    <label>Categoria:</label>
                    <select name="categoriaProduto" class="campos" id="categ">
                        <option value="eletronico">Eletronico</option>
                        <option value="livros">Livros</option>
                        <option value="roupas">Roupas</option>
                    </select>

                    <label>Quantidade:</label>
                    <input class="campos" type="number" name="qtdeProduto" placeholder="Digite a quantidade..."> 
                    
                    <div id="container-btn">
                        <input class="campos" type="submit" value="Cadastrar" id="btn-cadastro">
                    </div>
                </form> 
            </section>
     </section>

</body>
</html>