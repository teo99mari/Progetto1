<?php

namespace App\Http\Controllers\animali;

abstract class Animali implements animaliInterface {

    protected $nome;
    protected $habitat;

    public function __construct($nome, $habitat) {
        $this->nome = $nome;
        $this->habitat = $habitat;
    }

    abstract public function verso();
}
