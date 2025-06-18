<?php
include_once './Classes/Animal.class.php';

class Cachorro extends Animal {
    public $raca;
    public $cor;
    public $sexo;
    public $nome;
    public $tipo;

    public function Latir(): string {
        return "AU AU<br>";
    }   

    public function brincar(): string {
    return "$this->nome está brincando com a bolinha!";
}

public function comer($comida): string {
    return "$this->nome está comendo $comida.";
}

public function Amou($sentimento): string {
    return "$this->nome está  $sentimento seu novo dono.";
}

}
?>