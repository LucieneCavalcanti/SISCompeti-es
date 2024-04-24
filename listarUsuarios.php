<?php

require_once("cabecalho.php");
require_once("conexao.php");
$sql = "Select * from tbUsuarios order by nome";
$dados = $conn->query($sql);
while($registros = $dados->fetch(PDO::FETCH_ASSOC)) {
    echo "<p>".$registros['nome']."</p>";
}
$conn=null;
?>
</body>
</html>