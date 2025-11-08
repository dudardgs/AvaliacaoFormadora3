<?php

class Cliente
{
    // ATRIBUTOS
    protected int $idCliente = 0;
    protected string $endereco = '';
    protected float $credito = 0.0;
    protected string $tipoCliente = '';

    // GETTERS E SETTERS
    public function getIdCliente(): int { return $this->idCliente; }
    public function setIdCliente(int $idCliente): void { $this->idCliente = $idCliente; }

    public function getEndereco(): string { return $this->endereco; }
    public function setEndereco(string $endereco): void { $this->endereco = $endereco; }

    public function getCredito(): float { return $this->credito; }
    public function setCredito(float $credito): void { $this->credito = $credito; }

    public function getTipoCliente(): string { return $this->tipoCliente; }
    public function setTipoCliente(string $tipoCliente): void { $this->tipoCliente = $tipoCliente; }

    // MÉTODOS
    public function calcularLimiteCredito(): float
    {
        return $this->credito;
    }

    // toArray
    public function toArray(): array
    {
        return [
            'idCliente'   => $this->idCliente,
            'endereco'    => $this->endereco,
            'credito'     => $this->credito,
            'tipoCliente' => $this->tipoCliente,
        ];
    }
}
