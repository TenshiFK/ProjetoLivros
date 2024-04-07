<?php

    //CRUD
    class LivrosService {

        private $conexao;
        private $livro;

        public function __construct(Conexao $conexao, Livro $livro) {
            $this->conexao = $conexao->conectar();
            $this->livro = $livro;
        }

        public function inserir() { //create
            $query = 'insert into livros(id_usuario, nomeLivro, autor, sinopse, urlImg, estado, genero) values(:id_usuario, :nomeLivro, :autor, :sinopse, :urlImg, :estado, :genero)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_usuario', $this->livro->__get('id_usuario'));
            $stmt->bindValue(':nomeLivro', $this->livro->__get('nomeLivro'));
            $stmt->bindValue(':autor', $this->livro->__get('autor'));
            $stmt->bindValue(':sinopse', $this->livro->__get('sinopse'));
            $stmt->bindValue(':urlImg', $this->livro->__get('urlImg'));
            $stmt->bindValue(':estado', $this->livro->__get('estado'));
            $stmt->bindValue(':genero', $this->livro->__get('genero'));
            $stmt->execute();
        }

        public function recuperar() { //read
            $query = '
                select 
                    l.id, l.nomeLivro, l.autor, l.sinopse, l.urlImg, l.estado, g.genero 
                from 
                    livros as l
                    left join generolivro as g on (l.genero = g.genero)
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function recuperar_id() { //read
            $idLivro = $this->livro->__get('id');
            $query = '
                select 
                    l.id, l.nomeLivro, l.autor, l.sinopse, l.urlImg, l.estado, g.genero 
                from 
                    livros as l
                    left join generolivro as g on (l.genero = g.genero)
                where
                    l.id = :idLivro
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':idLivro', $idLivro);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_OBJ);
        }

        public function recuperar_idUser() { 

            $idUser = $_SESSION['id'];
            $query = '
                select 
                    l.id, l.nomeLivro, l.autor, l.sinopse, l.urlImg, l.estado, g.genero, l.id_usuario 
                from 
                    livros as l
                    left join generolivro as g on (l.genero = g.genero)
                where
                    l.id_usuario  = :idUser
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':idUser', $idUser);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function atualizar() { //update

            $query = "update livros set nomeLivro = ?, autor = ?, sinopse = ?, urlImg = ?, estado = ?, genero = ? where id = ?";
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->livro->__get('nomeLivro'));
            $stmt->bindValue(2, $this->livro->__get('autor'));
            $stmt->bindValue(3, $this->livro->__get('sinopse'));
            $stmt->bindValue(4, $this->livro->__get('urlImg'));
            $stmt->bindValue(5, $this->livro->__get('estado'));
            $stmt->bindValue(6, $this->livro->__get('genero'));
            $stmt->bindValue(7, $this->livro->__get('id'));
            return $stmt->execute(); 
        }

        public function remover() { //delete

            $query = 'delete from livros where id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->livro->__get('id'));
            $stmt->execute();
        }

        public function recuperarGeneroRomance() {
            $query = '
                select 
                    l.id, l.nomeLivro, l.autor, l.sinopse, l.urlImg, l.estado, g.genero 
                from 
                    livros as l
                    left join generolivro as g on (l.genero = g.genero)
                where
                    g.genero = :genero
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':genero', $this->livro->__get('genero'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function recuperarGeneroAcao() {
            $query = '
                select 
                    l.id, l.nomeLivro, l.autor, l.sinopse, l.urlImg, l.estado, g.genero 
                from 
                    livros as l
                    left join generolivro as g on (l.genero = g.genero)
                where
                    g.genero = :genero
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':genero', $this->livro->__get('genero'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function recuperarGeneroAventura() {
            $query = '
                select 
                    l.id, l.nomeLivro, l.autor, l.sinopse, l.urlImg, l.estado, g.genero 
                from 
                    livros as l
                    left join generolivro as g on (l.genero = g.genero)
                where
                    g.genero = :genero
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':genero', $this->livro->__get('genero'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function recuperarGeneroFiccao() {
            $query = '
                select 
                    l.id, l.nomeLivro, l.autor, l.sinopse, l.urlImg, l.estado, g.genero 
                from 
                    livros as l
                    left join generolivro as g on (l.genero = g.genero)
                where
                    g.genero = :genero
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':genero', $this->livro->__get('genero'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function recuperarGeneroTerror() {
            $query = '
                select 
                    l.id, l.nomeLivro, l.autor, l.sinopse, l.urlImg, l.estado, g.genero 
                from 
                    livros as l
                    left join generolivro as g on (l.genero = g.genero)
                where
                    g.genero = :genero
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':genero', $this->livro->__get('genero'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function recuperarGeneroDrama() {
            $query = '
                select 
                    l.id, l.nomeLivro, l.autor, l.sinopse, l.urlImg, l.estado, g.genero 
                from 
                    livros as l
                    left join generolivro as g on (l.genero = g.genero)
                where
                    g.genero = :genero
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':genero', $this->livro->__get('genero'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function recuperarGeneroOutros() {
            $query = '
                select 
                    l.id, l.nomeLivro, l.autor, l.sinopse, l.urlImg, l.estado, g.genero 
                from 
                    livros as l
                    left join generolivro as g on (l.genero = g.genero)
                where
                    g.genero = :genero
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':genero', $this->livro->__get('genero'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

    }

?>