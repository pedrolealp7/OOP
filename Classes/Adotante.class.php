<?php

class Adotante {
    public $nome;
    public $animalAdotado; 
    

    
   

   
    public function Nomedonovodono() {
        return $this->nome;
    }

    
    public function adotar($animalInfo) {
        $this->animalAdotado = $animalInfo;
    }

   
    public function ResumoAdocao() {
        return "$this->nome adotou: " . $this->animalAdotado;
    }
}
