<?php
require_once __DIR__ . '/Cliente.php';

class ClienteJuridico extends Cliente
{
    // ATRIBUTOS
    private string $razaoSocial = '';
    private string $cnpj = '';

    // GETTERS E SETTERS
    public function getRazaoSocial(): string { return $this->razaoSocial; }
    public function setRazaoSocial(string $razaoSocial): void { $this->razaoSocial = $razaoSocial; }

    public function getCnpj(): string { return $this->cnpj; }
    public function setCnpj(string $cnpj): void { $this->cnpj = $cnpj; }

    // toArray
    public function toArray(): array
    {
        return array_merge(parent::toArray(), [
            'razaoSocial' => $this->razaoSocial,
            'cnpj'        => $this->cnpj,
        ]);
    }
}
