<?php
include_once './Classes/Animal.class.php';

class Cobra extends Animal {
    public $raca;
    public $cor;
    public $sexo;
    public $nome;
    public $tipo;

    

    public function brincar(): string {
    return "$this->nome está brincando com o ratinho!";
}



public function comer($comida): string {
    return "$this->nome está comendo $comida.";
}


}
?>