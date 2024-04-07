<?php

    session_start();

    require_once 'C:/xampp/htdocs/projetoLivros/src/controllers/login_controller.php';
    require_once 'C:/xampp/htdocs/projetoLivros/src/service/users.service.php';
    require_once 'C:/xampp/htdocs/projetoLivros/src/models/conexao.php';

    $conexao = new Conexao();
    $usersService = new UsersService($conexao);
    $loginController = new LoginController($usersService);
    $loginController->autenticar($_POST['email'], $_POST['senha']);

?>