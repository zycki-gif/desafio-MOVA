<?php


class Pessoa
{
    private $nome;
    private $genero;
    private $idade;
    private $tipoSanguineo;
    private $peso;
    private $altura;

    public function __construct(string $nome, string $genero, int $idade, string $tipoSanguineo, float $peso, float $altura)
    {
        $this->nome = $nome;
        $this->genero = $genero;
        $this->idade = $idade;
        $this->tipoSanguineo = $tipoSanguineo;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getGenero(): string
    {
        return $this->genero;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getTipoSanguineo(): string
    {
        return $this->tipoSanguineo;
    }

    public function getPeso(): float
    {
        return $this->peso;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function getIMC(): float
    {

        $peso = $this->getPeso();
        $alturaMetro = $this->getAltura() / 100;
        $imc = $peso / ($alturaMetro * $alturaMetro);
        return $imc;
    }

    public function infos(): void
    {
        $infos = [
            "Nome: " => $this->getNome(),
            "Genero" => $this->getGenero(),
            "Idade" => $this->getIdade(),
            'Tipo Sanguíneo' => $this->getTipoSanguineo(),
            'Peso' => $this->getPeso(),
            'Altura' => $this->getAltura(),
        ];

        foreach ($infos as $key => $value) {
            echo "$key=>$value" . '<br>';
        }
    }
}
