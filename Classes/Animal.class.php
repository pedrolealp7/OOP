<?php

class Animal {
    public $tipo;
    public $amigavel;
    public $chipado;

    public function Animalselecionado(): string {
        return "Animal: " . $this->tipo;
    }

    public function amigavel(): string {
        return $this->amigavel ? 'sim' : 'não';
    }

    public function chipado(): string {
        return $this->chipado ? 'sim' : 'nao';
    }
}


