<?php
    require_once("cabecalho.php");
?>
    <form action="cadastrarUsuario.php" method="post">
        <label for="nome">Nome</label><br>
        <input type="text" name="nome"><br>
        <label for="email">E-mail</label><br>
        <input type="email" name="email"><br>
        <label for="senha">Senha</label><br>
        <input type="password" name="senha"><br>
        <input type="submit" value="Cadastrar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>