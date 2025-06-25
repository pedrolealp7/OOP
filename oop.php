<?php
include_once './Classes/Animal.class.php';
include_once './Classes/Adotante.class.php';


include_once './Classes/Cachorro.class.php';
$cachorro = new Cachorro();
$cachorro->nome = "Maicon";
$cachorro->tipo = "Cachorro";
$cachorro->raca = "Vira lata";
$cachorro->cor = "Amarelo";
$cachorro->sexo = "Macho";
$cachorro->especie= "Canis lupus familiaris"

// Criando o adotante
$adotante = new Adotante();
$adotante->nome = "Pedro Rosa";


$adotante->adotar($cachorro->Animalselecionado());

// Exibindo os dados
echo "<h2>Resumo da Adoção</h2>";
echo "Dono: " . $adotante->Nomedonovodono() . "<br>";
echo $adotante->ResumoAdocao() . "<br><br>";


echo "Nome: " . $cachorro->nome . "<br>";
echo "Raça: " . $cachorro->raca . "<br>";
echo "Cor: " . $cachorro->cor . "<br>";
echo "Sexo: " . $cachorro->sexo . "<br>";
echo $cachorro->Latir();
echo $cachorro->brincar();
echo $cachorro->comer("ração");
echo $cachorro->Amou("adorando");

include_once './Classes/Gato.php'
$gato = new Gato ();
$gato->nome = "Pretinha";
$gato->tipo = "Gato";
$gato->raca = "Siames";
$gato->cor = "preto e branco";
$gato->sexo = "Femia";


$adotante = new Adotante();
$adotante->nome = "Pedro Rosa";

$adotante->adotar($cachorro->Animalselecionado());


echo "<h2>Resumo da Adoção</h2>";
echo "Dono: " . $adotante->Nomedonovodono() . "<br>";
echo $adotante->ResumoAdocao() . "<br><br>";




echo "Nome: " . $gato->nome . "<br>";
echo "Raça: " . $gato->raca . "<br>";
echo "Cor: " . $gato->cor . "<br>";
echo "Sexo: " . $gato->sexo . "<br>";
echo $gato->Miar();
echo $gato->brincar();
echo $gato->comer("ração");
echo $gato->Amou("adorando");

?>