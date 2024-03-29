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
		$query = 'insert into livros(nomeLivro, autor, sinopse, urlImg, estado, genero) values(:nomeLivro, :autor, :sinopse, :urlImg, :estado, :genero)';
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':nomeLivro', $this->livro->__get('tarefa'));
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

	public function atualizar() { //update

		$query = "update livros set livro = ? where id = ?";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(1, $this->livro->__get('livro'));
		$stmt->bindValue(2, $this->livro->__get('id'));
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