<?php

class Users {
	public $id;
	public $nome;
	public $email;

	public $senha;

    public function __construct($id, $nome, $email, $senha) {
        $this->id = $id;
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = password_hash($senha, PASSWORD_DEFAULT);
    }

    public function verificarSenha($senha) {
        return password_verify($senha, $this->senha);
    }
}

?>