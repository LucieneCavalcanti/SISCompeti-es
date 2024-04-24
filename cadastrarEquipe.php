<?php
try { //se veio do formulário
    if(isset($_POST["nome"])){ //grava no banco
        $nome=$_POST['nome'];
        $sql = "INSERT INTO tbequipes (nomeEquipe)
         values('$nome')";
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