<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="../../valida_login.php" method="post">
        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="E-mail">
        </div>
        <div class="form-group">
            <input name="senha" type="password" class="form-control" placeholder="Senha">
        </div>
        <!--PHP, que checa se o login está correto, caso não esteja, mande um erro;-->
        <?php if(isset($_GET['login']) && $_GET['login'] == 'erro') {?>
            <div class="text-danger">
                Usuário ou senha Inválido(s).
            </div> 
        <?php } ?> <!--FECHA A TAG PHP, colocando o erro somente quando for verdade-->
        <button class="btn btn-lg btn-block btn-hover" type="submit" style='background-color:#070F2B; color:beige;'>
            Entrar!
        </button>
        <button><a href="../../index.php">voltar</a></button>
    </form>
</body>
</html>