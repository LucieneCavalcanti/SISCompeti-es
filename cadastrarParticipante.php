<?php
try { //se veio do formulário
    if(isset($_POST["idParticipante"]) && 
    isset($_POST["idEquipe"])){ //grava no banco
        $idParticipante=$_POST['idParticipante'];
        $idEquipe=$_POST['idEquipe'];
        $lider= 0;
        if (isset($_POST['lider'])) { $lider=1; }
        $sql = "INSERT INTO tbParticipantes 
        (idParticipante,idEquipe,lider) 
        values($idParticipante,$idEquipe,$lider)";
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