<?php

require '../../validador_acesso.php';

$acao = 'recuperarLivroIdUser';
require '../controllers/books_controller.php';

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
    <link rel="stylesheet" type="text/css" href="../../assets/styles/style.css">
    <link rel="stylesheet" type="text/css" href="../../assets/styles/styleForms.css">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script>
        function remover(id) {
			location.href = 'home.php?acao=removerLivro&id='+id;
		}

    </script>

    <style>

        .btn-addLivro{
            width: fit-content;
            font-size: 16px;
            padding: 10px;
        }

        .main-Home{
            min-height: 100vh;
        }
    </style>
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
                    <button class="btn-Cadastro" type="submit"><a href="../../logoff.php">Sair</a></button>
                </form>
                </div>
            </div>
        </nav>
    </div> 

    <?php if( isset($_GET['inclusao']) && $_GET['inclusao'] == 1 ) { ?>
			<div class="bg-success pt-2 text-white d-flex justify-content-center">
				<h5>Livro editado com sucesso!</h5>
			</div>
	<?php } ?>

    <main class="main-Home">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1 class="titulo-paginas">Meus livros cadastrados:</h1>

            <button class="btn-Troca btn-addLivro" type="submit"><a href="../view/addLivro.php">Adicionar Novo Livro</a></button>
        </div>

        </div>

            <?php
                $contador = 0;
                foreach($livros as $indice => $livro) {
                    // Inicia uma nova linha a cada três itens
                    if ($contador % 4 == 0) {
                        echo '<div class="row-livros">';
                    }
                ?>
                    <div class="col-livros">
                        <img src="<?= $livro->urlImg ?>" width="220" height="260" alt="">
                        <div class="conteudo-Troca">
                            <h3 class="titulo-Livro">Livro: <?= $livro->nomeLivro ?></h3>
                            <p class="estado_Livro">Estado: <?= $livro->estado ?></p>

                            <div class="d-flex start-0">
                                <a href="../view/editLivro.php?id=<?=$livro->id ?>"> <button class="btn-Troca">Editar</button> </a>
                                <button class="btn-Lista" onclick="remover(<?= $livro->id ?>)">Excluir</button>
                            </div>
                        </div>
                    </div>
                <?php
                    $contador++;
                    // Fecha a linha a cada três itens
                    if ($contador % 4 == 0) {
                        echo '</div>';
                    }
                }
                // Fecha a última linha se o número de livros não for múltiplo de três
                if ($contador % 4 != 0) {
                    echo '</div>';
                }
            ?>
        </div>
    </main>

    <footer class="rodape">
        <p>© Copyright 2024 Genérico Livros</p>
    </footer>
</body>
</html>