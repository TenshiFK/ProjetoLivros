<?php


//CRUD
class UsersService {

    private $conexao;

    public function __construct(Conexao $conexao) {
        $this->conexao = $conexao->conectar();
    }

    public function inserir(Users $users) {
        $query = 'INSERT INTO usuarios(nome, email, senha) VALUES(:nome, :email, :senha)';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':nome', $users->nome);
        $stmt->bindValue(':email', $users->email);
        $stmt->bindValue(':senha', $users->senha);
        $stmt->execute();
    }

    public function recuperar() {
        $query = 'SELECT id, nome, email, senha FROM usuarios';
        $stmt = $this->conexao->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function buscarPorEmail($email) {
        $query = 'SELECT id, nome, email, senha FROM usuarios WHERE email = :email';
        $stmt = $this->conexao->prepare($query);
        $stmt->bindValue(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

}

?>