<?php

namespace App\Http\Controllers\FunzioniVitali;

class TartarugaController extends AnimaleController {

    protected $respira;

    public function __construct($respira) {
        $this->respira = $respira;
    }

    public function mangia($cibo) {
        return 'insalata';
    }

    public function dormi($quantita_ore) {
        return '10';
    }

    function respira() {
        return $this->respira;
    }
}
