<?php

    $acao = 'recuperarLivro';
    require './src/controllers/books_controller.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Estilos-->
    <link rel="stylesheet" type="text/css" href="./style.css">


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>


    <!--AJAX-->
		<!-- Tenta puxar os dados do forms, utilizando o status pesquisado -->
		<script language="javascript" type="text/javascript">
			function GetRequestAjax(funcao){
					/**Tenta criar um request**/
					let request = new XMLHttpRequest();
					/**procurar tentar chamar a funcao forms para o URL**/
					var url="index.php?acao=";
					/**Adiciona o request com o status */
					request.open("GET",url+funcao, true);
					request.onreadystatechange = () => {
						if(request.readyState == 4 && request.status == 200){
							//**let dadosJSONText = request.responseText;
							/**let dados = JSON.parse(response);**/
							/**Muda a URL para a função.**/
							history.pushState({},"",url+funcao);
							window.location.reload()
						}
					}
					request.send();
				}
		</script>

</head>

<body>
    <div class="container-fluid m-0 p-0">
        <nav class="navbar navbar-expand-lg navBar">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <a class="navbar-brand me-auto mb-2 mb-lg-0" href="./index.php">
                    <img src="./assets/img/Group 4.png" height="60"alt="Logo">
                </a>
                <form class="d-flex" role="search">
                    <button class="btn-Login" type="submit"><a href="./src/view/login.php">Login</a></button>
                    <button class="btn-Cadastro" type="submit"><a href="./src/view/cadastro.php">Cadastro</a></button>
                </form>
                </div>
            </div>
        </nav>
    </div>  

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img src="./assets/img/img2.jpg" class="d-block w-100" height="500" alt="...">
            </div>
            <div class="carousel-item">
                <img src="./assets/img/Rectangle 5.png" class="d-block w-100" height="500" alt="...">
            </div>
            <div class="carousel-item active">
                <img src="./assets/img/img.jpg" class="d-block w-100" height="500" alt="...">
            </div>
        </div>
    </div>

    <div class="faixa-azul"></div>
    
    <div class="main-Home">

        <div class="form-group w-25">
            <form action="">
                <label for="">Filtrar Gênero</label>
                <select class="form-select mb-4" name="genero" aria-label="Default select example" onchange="GetRequestAjax(this.value)">
                    <option selected value="recuperarLivro">Selecione um gênero de livro</option>
                    <option value="recuperarGeneroRomance">Romance</option>
                    <option value="recuperarGeneroAcao">Ação</option>
                    <option value="recuperarGeneroAventura">Aventura</option>
                    <option value="recuperarGeneroFiccao">Ficção</option>
                    <option value="recuperarGeneroTerror">Terror</option>
                    <option value="recuperarGeneroDrama">Drama</option>
                    <option value="recuperarGeneroOutros">Outros</option>
                </select>
            </form>
        </div>

        <?php
            $contador = 0;
            foreach($livros as $indice => $livro) {
                // Inicia uma nova linha a cada três itens
                if ($contador % 3 == 0) {
                    echo '<div class="row-livros">';
                }
            ?>
                <div class="col-livros">
                    <img src="<?= $livro->urlImg ?>" width="220" height="260" alt="">
                    <div class="conteudo-Troca">
                        <h3 class="titulo-Livro">Livro: <?= $livro->nomeLivro ?></h3>
                        <p class="estado_Livro">Estado: <?= $livro->estado ?></p>

                        <div class="d-flex start-0">
                            <a href="./src/view/livro.php?id=<?= $livro->id ?>"> <button class="btn-Troca">Quero Trocar</button> </a>
                            <button class="btn-Lista">Lista de Desejos</button>
                        </div>
                    </div>
                </div>
            <?php
                $contador++;
                // Fecha a linha a cada três itens
                if ($contador % 3 == 0) {
                    echo '</div>';
                }
            }
            // Fecha a última linha se o número de livros não for múltiplo de três
            if ($contador % 3 != 0) {
                echo '</div>';
            }
        ?>
    </div>


    <footer class="rodape">
        <p>© Copyright 2024 Genérico Livros</p>
    </footer>
    
</body>

</html>