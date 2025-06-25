<?php

class Animal {
    public $tipo;
    public $amigavel;

    public function Animalselecionado(): string {
        return "Animal: " . $this->tipo;
    }

    public function amigavel(): string {
        return $this->amigavel ? 'sim' : 'não';
    }
}


