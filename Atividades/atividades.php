<?php

/*1. Criar função que recebe uma quantidade variável 
de palavras no formato de `string` e devolve uma frase 
como uma única `string` contatenando as palavras;*/

function concatenandoString(string ...$input):string
{
    $resultado='';
    foreach($input as $palavra){
        $resultado.= $palavra . ' ' ;
    }
    return $resultado;
}
echo concatenandoString('ola','mundo') . '<br>';



/*2. Criar função que recebe uma quantidade variável de 
números no formato de `integer` e devolve a multiplicação desse números;*/

function multiplicandoInteiros(int ...$int):int
{
    $resultado=1;
    foreach ($int as $n){
        $resultado*=$n;
    }
    return $resultado;
}

echo multiplicandoInteiros(1,2,3,4,5,6) . '<br>';

/*3. Criar função que recebe um `array associativo` e retorna a
 key do valor mais alto;*/

 function valorMaisAlto(array $array):string 
 {
    $resultado=array_search(max($array), $array);
    return $resultado;
 }

$mistoDeValores=array("a" => 5,"b" => 4,"c" => 12,"d" => 19,"y" => 20);
echo valorMaisAlto($mistoDeValores) . '<br>';

 /*4. Criar função que recebe um `array_associativo` com os pares `'nome' => idade` e devolve o próprio 
 `array`, mas retirando os pares onde a idade é menor que 18;*/

 function aquiNaoMenor(array $array):array
 {
    foreach($array as $nome=>$idade){
        if($idade<18){
            unset($array[$nome]);
        }
    }
    return $array;
}

$idade=array("Pedro" => 16, "Gustavo" => 18, "Elena" => 23,"Juliano" => 15);
$maioridade=aquiNaoMenor($idade);
var_dump($maioridade);

?>
/* ATIVIDADE REALIZADA POR JULIANO XAVIER ZYCZYCKI*/