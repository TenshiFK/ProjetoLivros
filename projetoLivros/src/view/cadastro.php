<?php

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Genérico - Cadastro</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Estilos-->
    <link rel="stylesheet" type="text/css" href="../../style.css">
    <link rel="stylesheet" type="text/css" href="../../styles/styleCadastro.css">
    <link rel="stylesheet" type="text/css" href="../../styles/styleLogin.css">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container-fluid m-0 p-0">
        <nav class="navbar navbar-expand-lg navBar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand me-auto mb-2 mb-lg-0" href="#">
                    <img src="../../assets/img/Group 4.png" height="60"alt="Logo">
                </a>
                <form class="d-flex" role="search">
                    <button class="btn-Login" type="submit"><a href="./src/view/login.php">Login</a></button>
                    <button class="btn-Cadastro" type="submit"><a href="./src/view/cadastro.php">Cadastro</a></button>
                </form>
                </div>
            </div>
        </nav>
    </div> 
    
    <button class="btn-voltar m-4"><a href="../../index.php">voltar</a></button>

    <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Usuário cadastrado com sucesso!</h5>
			</div>
	<?php } ?>
    <main class="login-container">
        <div class="login-card-2">
            <img src="../../assets/img/cadastro.png" alt="Logo" class="logo-3">
            <form method="post" action="./../controllers/users_controller.php?acao=inserir">
                <div class="form-1">
                    <input type="text" id="nome" name="nome" placeholder="Nome completo" required>
                </div>
                <div class="form-1">
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-1">
                    <input type="password" id="senha" name="senha" placeholder="Senha" required>
                </div>
                <button type="submit" class="login-button">Cadastrar</button>
            </form>
        </div>
    </main>

    <footer class="rodape">
        <p>© Copyright 2024 Genérico Livros</p>
    </footer>
</body>
</html>