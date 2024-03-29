<?php

class Livro {
	private $id;
	private $nomeLivro;
	private $autor;
	private $sinopse;

	private $urlImg;

	private $estado;

	private $genero;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
		return $this;
	}
}

?>