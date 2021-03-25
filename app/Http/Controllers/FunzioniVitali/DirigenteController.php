<?php

namespace App\Http\Controllers\FunzioniVitali;

class DirigenteController extends PersonaController {
    protected $respira;
    protected $stipendio;

    public function __construct($respira, $stipendio) {
        $this->respira = $respira;
        $this->stipendio = $stipendio;
    }

    public function mangia($cibo) {
        return 'pizza';
    }

    public function dormi($quantita_ore) {
        return '7';
    }

    public  function respira() {
        return $this->respira;
    }

    public function stipendio() {
        return $this->stipendio;
    }
}
