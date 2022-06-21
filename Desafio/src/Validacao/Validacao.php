<?php

require_once "src/Model/Pessoa.php";

class Validacao
{
    public Pessoa $Candidato;
    private bool $status = true;

    public function __construct(Pessoa $Candidato)
    {
        $this->status = True;
        $this->Candidato = $Candidato;
    }

    public function validaIdade(): string
    {
        $idade = $this->Candidato->getIdade();
        if ($idade < 18) {
            return "Idade não apta " . $this->status = False;
        }
        return "Idade apta ";
    }

    public function validaIMC(): string
    {
        $imc = $this->Candidato->getIMC();
        switch ($imc):
            case $imc < 25;
                return "Magreza" . " Candidato abaixo do peso " . $this->status = False;
                break;
            case $imc < 25;
                return "Normal" . " Candidato no peso ideal";
                break;
            case $imc < 30;
                return "Sobrepeso" . " Candidato no peso ideal ";
                break;
            default:
                return "Obesidade" . " Candidato acima do peso " . $this->status = False;
        endswitch;
    }

    public function validaTipoSanguineo(): string
    {
        $tipoSanguineo = $this->Candidato->getTipoSanguineo();
        switch ($tipoSanguineo):
            case "A-":
                return "Tipo sanguineo compativel";
            case "A+":
                return "Tipo sanguineo compativel";
                break;
            case "O+":
                return "Tipo sanguineo compativel";
                break;
            case "O-":
                return "Tipo sanguineo compativel";
                break;
            default:
                return "Tipo sanguineo não compativel" . $this->status = False;
        endswitch;
    }

    public function setValidacao(): string
    {
        $valido = [
            "idade" => $this->validaIdade(),
            "IMC" => $this->validaIMC(),
            "Tipo Sanguineo" => $this->validaTipoSanguineo()
        ];
        foreach ($valido as $key=>$value) {
            echo "$key=>$value" . '<br>';
        }
        if ($this->status === False) {
            return "REPROVADO";
        }
        return "APROVADO";
    }
}
