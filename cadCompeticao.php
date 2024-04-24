<?php
    require_once("cabecalho.php");
?>
    <form action="cadastrarCompeticao.php" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome" size="50"><br>
        <label for="descricao">Descrição</label><br>
        <textarea name="descricao" rows="10" cols="50"></textarea><br>
        <label for="dataInicioInscricao">Data de Início das Inscrições</label><br>
        <input type="date" name="dataInicioInscricao"><br>
        <label for="dataFimInscricao">Data de Final das Inscrições</label><br>
        <input type="date" name="dataFimInscricao"><br>
        <label for="dataInicioCompeticao">Data de Início da Competição</label><br>
        <input type="date" name="dataInicioCompeticao"><br>
        <label for="dataFimCompeticao">Data de Final da Competição</label><br>
        <input type="date" name="dataFimCompeticao"><br>
        <label for="premios">Prêmios</label><br>
        <textarea name="premios" rows="10" cols="50"></textarea><br>
        <label for="logo">Logotipo</label><br>
        <input type="file" name="logo"><br>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>