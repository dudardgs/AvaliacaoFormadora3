<?php

class Livro
{
    // ATRIBUTOS
    private string $idLivro;
    private string $isbn;
    private string $titulo;
    private int $anoPublicacao;
    private int $qteEstoque;
    private float $valor;
    private ?string $editora = null;
    private array $autores = [];

    // CONSTRUTOR
    public function __construct(
        string $idLivro = '',
        string $isbn = '',
        string $titulo = '',
        int $anoPublicacao = 0,
        int $qteEstoque = 0,
        float $valor = 0.0
    ) {
        $this->idLivro = $idLivro;
        $this->isbn = $isbn;
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
        $this->qteEstoque = $qteEstoque;
        $this->valor = $valor;
    }

    // GETTERS E SETTERS
    public function getIdLivro(): string { return $this->idLivro; }
    public function setIdLivro(string $idLivro): void { $this->idLivro = $idLivro; }

    public function getIsbn(): string { return $this->isbn; }
    public function setIsbn(string $isbn): void { $this->isbn = $isbn; }

    public function getTitulo(): string { return $this->titulo; }
    public function setTitulo(string $titulo): void { $this->titulo = $titulo; }

    public function getAnoPublicacao(): int { return $this->anoPublicacao; }
    public function setAnoPublicacao(int $anoPublicacao): void { $this->anoPublicacao = $anoPublicacao; }

    public function getQteEstoque(): int { return $this->qteEstoque; }
    public function setQteEstoque(int $qteEstoque): void { $this->qteEstoque = $qteEstoque; }

    public function getValor(): float { return $this->valor; }
    public function setValor(float $valor): void { $this->valor = $valor; }

    public function getEditora(): ?string { return $this->editora; }
    public function setEditora(?string $editora): void { $this->editora = $editora; }

    public function getAutores(): array { return $this->autores; }
    public function setAutores(array $autores): void { $this->autores = $autores; }
    public function addAutor(string $autor): void { $this->autores[] = $autor; }

    // MÉTODOS
    public function verificarDisponibilidade(): bool
    {
        return $this->qteEstoque > 0;
    }

    // toArray
    public function toArray(): array
    {
        return [
            'idLivro'       => $this->idLivro,
            'isbn'          => $this->isbn,
            'titulo'        => $this->titulo,
            'anoPublicacao' => $this->anoPublicacao,
            'qteEstoque'    => $this->qteEstoque,
            'valor'         => $this->valor,
            'editora'       => $this->editora,
            'autores'       => $this->autores,
        ];
    }
}
