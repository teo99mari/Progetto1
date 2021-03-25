<?php

namespace App\Http\Controllers\FunzioniVitali;

class CaneController extends AnimaleController {

    public function __construct($habitat, $coda, $peso) {
        $this->habitat = $habitat;
        $this->coda = $coda;
        $this->peso = $peso;
    }

    public function haIlChip() {
        return true;
    }

    public function mangia($cibo) {
        return 'Ho mangiato ' . $cibo;
    }

    public function dormi($quantita_ore) {
        return 'Ho dormito per ' . $quantita_ore . ' ore';
    }
}
