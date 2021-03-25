<?php

namespace App\Http\Controllers\FunzioniVitali;

class CalciatoreController extends PersonaController {
    protected $respira;
    protected $ruolo;

    public function __construct($respira, $ruolo) {
        $this->respira = $respira;
        $this->ruolo = $ruolo;
    }

    public function mangia($cibo) {
        return 'pasta';
    }

    public function dormi($quantita_ore) {
        return '8';
    }

    public  function respira() {
        return $this->respira;
    }

    public function ruolo() {
        return $this->ruolo;
    }
}
