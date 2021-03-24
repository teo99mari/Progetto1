<?php

namespace App\Http\Controllers\animali;

class leone extends Animali {

    protected $verso;

    public function __construct($nome, $habitat) {
        parent::__construct($nome,$habitat);
        $this->verso = 'GRRR';
    }

    public function verso() {
       return $this->verso;
    }
}
