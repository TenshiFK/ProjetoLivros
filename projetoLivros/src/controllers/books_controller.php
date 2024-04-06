<?php

	require "C:/xampp/htdocs/projetoLivros/src/models/books.model.php";
	require "C:/xampp/htdocs/projetoLivros/src/controllers/books.service.php";
	require "C:/xampp/htdocs/projetoLivros/src/models/conexao.php";


	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserirLivro' ) {
		$livro = new Livro();
		$livro->__set('id_usuario', $_POST['id_usuario']);
		$livro->__set('nomeLivro', $_POST['nomeLivro']);
		$livro->__set('autor', $_POST['autor']);
		$livro->__set('urlImg', $_POST['urlImg']);
		$livro->__set('estado', $_POST['estado']);
        $livro->__set('genero', $_POST['genero']);
		$livro->__set('sinopse', $_POST['sinopse']);

		$conexao = new Conexao();

		$livrosService = new LivrosService($conexao, $livro);
		$livrosService->inserir();

		header('Location: ../view/addLivro.php?inclusao=1');
	
	} else if($acao == 'recuperarLivro') {
		
		$livro = new Livro();
		$conexao = new Conexao();

		$livrosService = new LivrosService($conexao, $livro);
		$livros = $livrosService->recuperar();
	
	} else if($acao == 'recuperarLivroId') {
		$idLivro = isset($_GET['id']) ? $_GET['id'] : null;
		if ($idLivro) {
			$livro = new Livro();
			$livro->__set('id', $idLivro);
	
			$conexao = new Conexao();
			$livrosService = new LivrosService($conexao, $livro);
			$livroDetalhes = $livrosService->recuperar_id();
		}

	} else if($acao == 'recuperarLivroIdUser') {
		$livro = new Livro();
		$conexao = new Conexao();
	
		$livrosService = new LivrosService($conexao, $livro);
		$livros = $livrosService->recuperar_idUser();

	} else if($acao == 'atualizarLivro') {
		$livro = new Livro();
		$livro->__set('id', $_POST['id'])
			  ->__set('nomeLivro', $_POST['nomeLivro'])
			  ->__set('autor', $_POST['autor'])
			  ->__set('sinopse', $_POST['sinopse'])
			  ->__set('urlImg', $_POST['urlImg'])
			  ->__set('estado', $_POST['estado'])
			  ->__set('genero', $_POST['genero']);
	
		$conexao = new Conexao();
	
		$livrosService = new LivrosService($conexao, $livro);
		if($livrosService->atualizar()) {
			if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
				header('location: ../../index.php ');    
			} else {
				header('location: ../view/home.php?inclusao=1');
			}
		}
	} else if($acao == 'removerLivro') {

		$livro = new Livro();
		$livro->__set('id', $_GET['id']);

		$conexao = new Conexao();

		$livrosService = new LivrosService($conexao, $livro);
		$livrosService->remover();

		if( isset($_GET['pag']) && $_GET['pag'] == 'index') {
			header('location: ../../index.php ');	
		} else {
			header('location: ../view/home.php');
		}
	
	} else if($acao == 'recuperarGeneroRomance') {
		$livro = new Livro();
		$livro->__set('genero', 'Romance');
		
		$conexao = new Conexao();

		$livrosService = new LivrosService($conexao, $livro);
		$livros = $livrosService->recuperarGeneroRomance();

	} else if($acao == 'recuperarGeneroAcao') {
        $livro = new Livro();
        $livro->__set('genero', 'Ação');
        
        $conexao = new Conexao();

        $livrosService = new LivrosService($conexao, $livro);
        $livros = $livrosService->recuperarGeneroAcao();

	} else if($acao == 'recuperarGeneroAventura') {
		$livro = new Livro();
		$livro->__set('genero', 'Aventura');
		
		$conexao = new Conexao();

		$livrosService = new LivrosService($conexao, $livro);
		$livros = $livrosService->recuperarGeneroAventura();

	} else if($acao == 'recuperarGeneroFiccao') {
        $livro = new Livro();
        $livro->__set('genero', 'Ficção');
        
        $conexao = new Conexao();

        $livrosService = new LivrosService($conexao, $livro);
        $livros = $livrosService->recuperarGeneroFiccao();

	} else if($acao == 'recuperarGeneroTerror') {
		$livro = new Livro();
		$livro->__set('genero', 'Terror');
		
		$conexao = new Conexao();

		$livrosService = new LivrosService($conexao, $livro);
		$livros = $livrosService->recuperarGeneroTerror();

	} else if($acao == 'recuperarGeneroDrama') {
        $livro = new Livro();
        $livro->__set('genero', 'Drama');
        
        $conexao = new Conexao();

        $livrosService = new LivrosService($conexao, $livro);
        $livros = $livrosService->recuperarGeneroDrama();

	} else if($acao == 'recuperarGeneroOutros') {
        $livro = new Livro();
        $livro->__set('genero', 'Outros');
        
        $conexao = new Conexao();

        $livrosService = new LivrosService($conexao, $livro);
        $livros = $livrosService->recuperarGeneroOutros();

	} 
?>