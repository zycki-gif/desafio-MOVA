<?php

require_once "src/Model/Pessoa.php";
require_once "src/Validacao/Validacao.php";

$Paciente = new Pessoa("Lohane Vêkanandre Sthephany Smith Bueno de HA HA HA de Raio Laser bala de Icekiss", "Feminino", 21, "A+", 71, 172);

$Candidato1 = new Pessoa("Carlos Rato Roberto Massa ", "Masculino", 22, "AB+", 72, 175);
$Candidato1Validacao = new Validacao($Candidato1);
$Candidato1->infos();
echo  $Candidato1Validacao->setValidacao();
echo '<br><hr>';
$Candidato2 = new Pessoa("Kassandra Portadora da Águia", "Feminino", 22, "O+", 67, 160);
$Candidato2Validacao = new Validacao($Candidato2);
$Candidato2->infos();
echo $Candidato2Validacao->setValidacao() ;
echo '<br><hr>';
$Candidato3 = new Pessoa("Arthur Morgan", "Masculino", 17, "O-", 80, 159);
$Candidato3Validacao = new Validacao($Candidato3);
$Candidato3->infos();
echo $Candidato3Validacao->setValidacao() ;


/* ATIVIDADE REALIZADA POR JULIANO XAVIER ZYCZYCKI*/