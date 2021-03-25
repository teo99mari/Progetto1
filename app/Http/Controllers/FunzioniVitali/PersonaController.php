<?php

namespace App\Http\Controllers\FunzioniVitali;

abstract class PersonaController implements FunzioniVtaliInterface {

    public function respira() {
        return 'Ho respirato';
    }

    abstract public function mangia($cibo);

    abstract public function dormi($quantita_ore);
}
