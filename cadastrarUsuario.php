<?php
try { //se veio do formulário
    if(isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])){ //grava no banco
        $nome=$_POST['nome'];
        $email=$_POST['email'];
        $senha=$_POST['senha'];
        $sql = "INSERT INTO tbusuarios (nome,email,senha) values('$nome','$email','$senha')";
        require_once("conexao.php");
        // use exec() because no results are returned
        $conn->exec($sql);
        echo "<p>Registro salvo com sucesso!</p>";
    } else { echo "<p>Digite os dados.</p>"; }
} catch(Exception $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>