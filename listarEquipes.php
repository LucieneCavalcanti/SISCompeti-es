<?php

require_once("cabecalho.php");
require_once("conexao.php");
$sql = "Select * from tbequipes order by nomeEquipe";
$dados = $conn->query($sql);
while($registros = $dados->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>".$registros['nomeEquipe']."</p>";
    $sql2 = "select p.*, u.nome 
    from tbparticipantes p, tbusuarios u
    where  p.idParticipante = u.id 
    and p.idEquipe = ". $registros['id']." order by u.nome";
    $dados2 = $conn->query($sql2);
    echo "<ul>";
    while($registros2 = $dados2->fetch(PDO::FETCH_ASSOC)) {
        echo "<li>".$registros2['nome']. " - ".
        $registros2['status']."</li>";
    }
    echo "</ul>";
}
$conn=null;
?>
</body>
</html>