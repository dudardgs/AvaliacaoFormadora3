<?php
require_once __DIR__ . '/Cliente.php';

class Venda
{
    // ATRIBUTOS
    private int $idVenda = 0;
    private DateTime $dataVenda;
    private string $formaPagto = '';
    private ?Cliente $cliente = null;

    // CONSTRUTOR
    public function __construct()
    {
        $this->dataVenda = new DateTime();
    }

    // GETTERS E SETTERS
    public function getIdVenda(): int { return $this->idVenda; }
    public function setIdVenda(int $idVenda): void { $this->idVenda = $idVenda; }

    public function getDataVenda(): DateTime { return $this->dataVenda; }
    public function setDataVenda(DateTime $dataVenda): void { $this->dataVenda = $dataVenda; }

    public function getFormaPagto(): string { return $this->formaPagto; }
    public function setFormaPagto(string $formaPagto): void { $this->formaPagto = $formaPagto; }

    public function getCliente(): ?Cliente { return $this->cliente; }
    public function setCliente(?Cliente $cliente): void { $this->cliente = $cliente; }

    // MÉTODOS
    public function aplicarDesconto(float $percentual): float
    {
        if ($percentual < 0)  { $percentual = 0; }
        if ($percentual > 100){ $percentual = 100; }
        return 1.0 - ($percentual / 100.0);
    }

    // toArray
    public function toArray(): array
    {
        return [
            'idVenda'    => $this->idVenda,
            'dataVenda'  => $this->dataVenda->format(DATE_ATOM),
            'formaPagto' => $this->formaPagto,
            'cliente'    => $this->cliente ? $this->cliente->toArray() : null,
        ];
    }
}