<?php

namespace App\Http\Controllers\animali;

class elefante extends Animali {

    protected $verso;

    public function __construct($nome, $habitat) {
        parent::__construct($nome,$habitat);
        $this->verso = 'ARRR';
    }

    public function verso() {
        return null;
    }
}
