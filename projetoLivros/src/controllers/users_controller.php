<?php

    require "C:/xampp/htdocs/projetoLivros/src/models/users.model.php";
    require "C:/xampp/htdocs/projetoLivros/src/controllers/users.service.php";
    require "C:/xampp/htdocs/projetoLivros/src/models/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : null;

    if ($acao == 'inserir') {
        $conexao = new Conexao();
        $usersService = new UsersService($conexao);

        $user = new Users(null, $_POST['nome'], $_POST['email'], $_POST['senha']);
        $usersService->inserir($user);

        header('Location: ../view/cadastro.php?inclusao=1');
    } elseif ($acao == 'recuperar') {
        $conexao = new Conexao();
        $usersService = new UsersService($conexao);

        $users = $usersService->recuperar();

    }

?>