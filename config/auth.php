
<body>
<?php

    include("./conexao.php");
    /* $mysqli->real_escape_string SERVE PARA LIMPAR OS DADOS E EVITAR SQL INJECTION */
    $login = $mysqli->real_escape_string($_POST['email']);
    $senha = $mysqli->real_escape_string($_POST['psword']);

    $sqlAuth = "SELECT email, senha FROM usuarios WHERE email = '$login' and senha = '$senha' ";

    $sql_query = $mysqli->query($sqlAuth) or die("ERRO ao consultar " . $mysqli->error);

    /* Verificando se existem registros: */
    $registros = $sql_query->num_rows;
    $dados = $sql_query->fetch_assoc();

    if($login == $dados['email'] && $senha == $dados['senha']) {
        session_start();

        $nome = $dados['idUsuario'];
        $_SESSION['nome'] = $dados['nomeUsuario'];

        header("location: ../home.php");

    } else {
        echo  'Falha ao logar...';
    }


    /* $log = $dados['email'];
    $passwd = $dados['senha'];

    if($login == $log && $senha == $passwd) {
        echo "Login realizado com sucesso";

    } else {
        echo "Login e Senha incorretos...";
    } */

?>
    
</body>