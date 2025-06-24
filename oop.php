<?php
include_once './Classes/Animal.class.php';
include_once './Classes/Cachorro.class.php';
include_once './Classes/Adotante.class.php';

// Criando o cachorro
$cachorro = new Cachorro();
$cachorro->nome = "Maicon";
$cachorro->tipo = "Cachorro";
$cachorro->raca = "Vira lata";
$cachorro->cor = "Amarelo";
$cachorro->sexo = "Macho";

// Criando o adotante
$adotante = new Adotante();
$adotante->nome = "Pedro Rosa";

// Adotante adota o cachorro (pegando a descrição do animal)
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


?>