<?php
    require_once("cabecalho.php");
?>
    <form action="cadastrarParticipante.php" method="post">
        <label for="idEquipe">ID Equipe</label><br>
        <input type="text" name="idEquipe"><br>
        <label for="idParticipante">ID Participante</label><br>
        <input type="text" name="idParticipante"><br>
        <input type="checkbox" name="lider" value="1">É Líder da Equipe?<br>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>