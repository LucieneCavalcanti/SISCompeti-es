<?php

require_once("cabecalho.php");
require_once("conexao.php");
$sql = "select p.*, e.nomeEquipe , u.nome 
from tbparticipantes p, tbequipes e, tbusuarios u
where  p.idEquipe = e.id and p.idParticipante = u.id 
order by e.nomeEquipe";
$dados = $conn->query($sql);
while($registros = $dados->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>".$registros['nomeEquipe']." - " .
    $registros['nome'] . " | " . $registros['lider'] .
    ": " . $registros['status'] . "</p>";
}
$conn=null;
?>
</body>
</html>