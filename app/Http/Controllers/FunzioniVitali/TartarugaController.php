<?php

namespace App\Http\Controllers\FunzioniVitali;

class TartarugaController extends AnimaleController {
    protected $eta;

    public function __construct($habitat, $coda, $peso, $eta) {
        $this->habitat = $habitat;
        $this->coda = $coda;
        $this->peso = $peso;
        $this->eta = $eta;
    }

    public function isCentenaria() {
        if ($this->eta >= 100) {
            return 'è centenaria';
        }

        return 'non è centenaria';
    }

    public function mangia($cibo) {
        return 'Ho mangiato ' . $cibo;
    }

    public function dormi($quantita_ore) {
        return 'Ho dormito per ' . $quantita_ore . ' ore';
    }
}
