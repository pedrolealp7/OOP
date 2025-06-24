<?php

class Animal {
    public $nome;
    public $tipo;

    public function Animalselecionado(): string {
        return "Animal: " . $this->tipo;
    }
}
