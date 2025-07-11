<?php
include_once './Classes/Animal.class.php';
include_once './Classes/Cachorro.class.php';
include_once './Classes/Adotante.class.php';
include_once './Classes/Gato.php';
include_once './Classes/Cobra.class.php';


// Criando o cachorro
$cachorro = new Cachorro();
$cachorro->nome = "Maicon";
$cachorro->tipo = "Cachorro";
$cachorro->raca = "Vira lata";
$cachorro->cor = "Amarelo";
$cachorro->sexo = "Macho";
$cachorro->amigavel = TRUE;


// Criando o adotante
$adotante = new Adotante();
$adotante->nome = "Pedro Rosa";

// Adotante adota o cachorro (pegando a descrição do animal)
$adotante->adotar($cachorro->Animalselecionado());

// Exibindo os dados
echo "<h2>Resumo da adoção do Maicon</h2>";
echo "Dono: " . $adotante->Nomedonovodono() . "<br>";
echo $adotante->ResumoAdocao() . "<br><br>";


echo "Nome: " . $cachorro->nome . "<br>";
echo "Raça: " . $cachorro->raca . "<br>";
echo "Cor: " . $cachorro->cor . "<br>";
echo "Sexo: " . $cachorro->sexo . "<br>";
echo "Amigável: " . $cachorro->amigavel() . "<br>";
echo $cachorro->brincar();
echo $cachorro->comer("ração");
echo $cachorro->Amou("adorando");


$gato = new Gato();
$gato->nome = "Pretinha";
$gato->tipo = "Gato";
$gato->raca = "Siames";
$gato->cor = "cinza, preto e branco";
$gato->sexo = "Feminina";
$gato->amigavel = TRUE;

$adotante = new Adotante();
$adotante->nome = "Adriana Rosa";

$adotante->adotar($gato->Animalselecionado());

echo "<h2>Resumo da adoção Pretinha</h2>";
echo "Dono: " . $adotante->Nomedonovodono() . "<br>";
echo $adotante->ResumoAdocao() . "<br><br>";


echo "Nome: " . $gato->nome . "<br>";
echo "Raça: " . $gato->raca . "<br>";
echo "Cor: " . $gato->cor . "<br>";
echo "Sexo: " . $gato->sexo . "<br>";
echo "Amigável: " . $cachorro->amigavel() . "<br>";

echo $gato->Miar();
echo $gato->brincar();
echo $gato->comer("ração");
echo $gato->Amou("adorando");



$cobra = new Cobra();
$cobra->nome = "Marta";
$cobra->tipo = "Reptil";
$cobra->raca = "Piton";
$cobra->cor = "Amarela e Branca";
$cobra->sexo = "Feminina";
$cobra->amigavel = FALSE;

$adotante = new Adotante();
$adotante->nome = "Dr.Sandro";

$adotante->adotar($cobra->Animalselecionado());

echo "<h2>Resumo da adoção Pretinha</h2>";
echo "Dono: " . $adotante->Nomedonovodono() . "<br>";
echo $adotante->ResumoAdocao() . "<br><br>";


echo "Nome: " . $cobra->nome . "<br>";
echo "Raça: " . $cobra->raca . "<br>";
echo "Cor: " . $cobra->cor . "<br>";
echo "Sexo: " . $cobra->sexo . "<br>";
echo "Amigável: " . $cobra->amigavel() . "<br>";


echo $cobra->brincar();
echo $cobra->comer("ratos");









?>