<?php
require_once __DIR__ . '/Cliente.php';

class ClienteFisico extends Cliente
{
    // ATRIBUTOS
    private string $nome = '';
    private string $cpf  = '';

    // GETTERS E SETTERS
    public function getNome(): string { return $this->nome; }
    public function setNome(string $nome): void { $this->nome = $nome; }

    public function getCpf(): string { return $this->cpf; }
    public function setCpf(string $cpf): void { $this->cpf = $cpf; }

    // toArray
    public function toArray(): array
    {
        return array_merge(parent::toArray(), [
            'nome' => $this->nome,
            'cpf'  => $this->cpf,
        ]);
    }
}