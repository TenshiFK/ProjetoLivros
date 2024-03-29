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

        <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Usuário cadastrado com sucesso!</h5>
			</div>
		<?php } ?>

    <form method="post" action="./../controllers/users_controller.php?acao=inserir">
        <div class="form-group">
            <input name="nome" type="text" class="form-control" placeholder="Nome">
        </div>
        <div class="form-group">
            <input name="email" type="email" class="form-control" placeholder="E-mail">
        </div>
        <div class="form-group">
            <input name="senha" type="password" class="form-control" placeholder="Senha">
        </div>
        <button class="btn btn-lg btn-block btn-hover" type="submit" style='background-color:#070F2B; color:beige;'>
            Cadastrar!
        </button>
    </form>
    <button><a href="../../index.php">Voltar</a></button>
    <button><a href="./login.php">Entrar</a></button>
</body>
</html>