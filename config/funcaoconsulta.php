<?php
    include("conexao.php");
    include("protect.php");

    $nome = $_POST['nomeProduto'];

    $date = "20/08/08";
    $user = $_SESSION['id'];

    $sql = "SELECT * FROM produtos WHERE nomeProduto = '$nome'";
    $sqlSave = $mysqli->prepare("INSERT INTO emprestimos(dataDev, idUsuario, idProduto) VALUES (?, ?, ?)");

    $sql_query = $mysqli->query($sql) or die("ERRO ao consultar " . $mysqli->error);

    $dados = $sql_query->fetch_assoc();

    try {
        if($sql_query->num_rows == 1) {
            $id = $dados['idProduto'];
            $nome = $dados['nomeProduto'];
    
            $sqlSave->bind_param("sss", $date, $user, $id);
    
            $sqlSave->execute();
    
            header("location: ../home.php");
        } 

    } catch (Exception $e) {
        echo $e;
    }

    
?>

