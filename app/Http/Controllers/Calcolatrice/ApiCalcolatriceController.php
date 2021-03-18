<?php

namespace App\Http\Controllers\Calcolatrice;

use Illuminate\Http\Request;

class ApiCalcolatriceController
{
    public function run(Request $req) {
        $valore1 = $req->get('valore1');
        $valore2 = $req->get('valore2');
        $operazione = $req->get('operazione');

        $risultato = null;
        switch ($operazione) {
            case 'somma':
                $risultato = Calcolatrice::somma($valore1, $valore2);
                break;
            case 'differenza':
                $risultato = Calcolatrice::differenza($valore1, $valore2);
                break;
            case 'prodotto':
                $risultato = Calcolatrice::moltiplicazione($valore1, $valore2);
                break;
            case 'quoziente':
                $risultato = Calcolatrice::divisione($valore1, $valore2);
                break;
            default:
                $risultato = 'error';
        }

        return $risultato;
    }
}
