<?php
/* AULA 2 exercício 1 Faça seu nome aparecer na tela 
*/
$nome = "Yuri Santana";

echo ($nome);

/*Exercício 2 Mostre Aprovado ou Reprovado dependendo
da média final 
*/
$notas = [7, 9, 3];
$somaNotas = $notas[0] + $notas[1] + $notas[2];
$mediaNotas = $somaNotas / 3;

$teste = "Cursando";

if ($mediaNotas >= 6) {
    $teste = "Aprovado";
} else {
    $teste = "Reprovado";
}

echo "Nome: $nome\n" . "Nota 1: $notas[0]\tNota 2: $notas[1]\tNota 3: $notas[2] \n";
echo "Média final: $mediaNotas". "\t Situação: $teste";

/*Exercício 3 Transforme um valor em Metros para Centímetros e mostre na tela
*/
$metros = 5;
$centimetros = $metros * 100;

echo ("Metros: $metros; Centímetros: $centimetros");

/* Exercício 4 Teste se o ano é bissexto
*/
$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.";
} else {
    echo "$ano não é bissexto.";
}

/*Exercício 5 Transforme uma temperatura de Celsius para Fahrenheit
*/
$celsius = 20;
$fahrenheit = (($celsius * 9) / 5) + 32;

echo "- Celsius: $celsius °C
- Fahrenheit: $fahrenheit °F";

/*AULA 3 Exercício 1 Exiba todos os números ímpares de 0 a 100
*/
$numero = 0;
$impares = 0;

for ($numero = 0; $numero <= 100; $numero++) {
    $testeImpar = ($numero % 2) != 0;

    if ($testeImpar) {
        $impares++;
        echo "O número $numero é ímpar.\n\n";
    }
}

echo "De 0 a 100, temos $impares números ímpares!\n\n";

/* Exercício 2 Calcule o IMC e exiba a Classificação
*/
$alturaEmMetros = $argv[1];
$pesoEmKg = $argv[2];

$calculoImc = $pesoEmKg / ($alturaEmMetros * $alturaEmMetros);
$imc = number_format($calculoImc, 2);

if ($imc < 18.5) {
    $classificacao = "Abaixo do peso";
} elseif (($imc >= 18.5) && ($imc <= 24.9)) {
    $classificacao = "Peso normal";
} elseif (($imc >= 25) && ($imc <= 29.9)) {
    $classificacao = "Sobrepeso";
} elseif ($imc >= 30) {
    $classificacao = "Obesidade";
} else {
    $classificacao = "IMC desconhecido";
}

echo "Seu IMC é $imc.\n";
echo "Você está classificado(a) como \"$classificacao\".\n";

/* Exercício 3 
Dependendo da hora, exiba a respectiva saudação
*/
$hora = 30;

if (($hora >= 18) && ($hora < 24)) {
    echo "Boa noite!";
} elseif ($hora >= 12) {
    echo "Boa tarde!";
} elseif ($hora >= 4){
    echo "Bom dia!";
} elseif ($hora >= 0) {
    echo "Melhor ir dormir. Buenas noches!";
} else {
    echo "A medida de tempo fora reduzida a pó. Não sabemos que horas são!";
}