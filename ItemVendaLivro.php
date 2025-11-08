<?php
require_once __DIR__ . '/Livro.php';
require_once __DIR__ . '/Venda.php';

class ItemVendaLivro
{
    // ATRIBUTOS
    private ?Livro $livro = null;
    private ?Venda $venda = null;
    private int $qteVendida = 0;

    // GETTERS E SETTERS
    public function getLivro(): ?Livro { return $this->livro; }
    public function setLivro(?Livro $livro): void { $this->livro = $livro; }

    public function getVenda(): ?Venda { return $this->venda; }
    public function setVenda(?Venda $venda): void { $this->venda = $venda; }

    public function getQteVendida(): int { return $this->qteVendida; }
    public function setQteVendida(int $qteVendida): void { $this->qteVendida = $qteVendida; }

    // MÉTODOS
    public function calcularSubtotal(): float
    {
        $valorUnit = $this->livro ? $this->livro->getValor() : 0.0;
        return $valorUnit * $this->qteVendida;
    }

    // toArray
    public function toArray(): array
    {
        return [
            'livro'      => $this->livro ? $this->livro->toArray() : null,
            'venda'      => $this->venda ? $this->venda->toArray() : null,
            'qteVendida' => $this->qteVendida,
            'subtotal'   => $this->calcularSubtotal(),
        ];
    }
}
