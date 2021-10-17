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

            <section id="quadro">
                <a href="/components/cadastroProdutos.php">
                    <section  class="qdCadastro">
                        <h1>PRODUTOS</h1>
                        <div>
                            <p>Cadastre aqui seus produtos que deseja emprestar.</p>
                        </div>
                    </section>
                </a>
                <a href="/components/cadastroUsuario.php">
                    <section  class="qdCadastro">
                        <h1>USUÁRIOS</h1>
                        <div>
                            <p>Cadastre aqui usuarios para acessar a plataforma.</p>
                        </div>
                    </section>
                </a>
            </section>
     </section>

</body>
</html>