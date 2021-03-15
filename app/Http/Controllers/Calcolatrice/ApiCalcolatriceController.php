<?php

namespace App\Http\Controllers\Calcolatrice;

use Illuminate\Http\Request;

class ApiCalcolatriceController
{
    public function run(Request $req) {
        $valore1 = $req->get('valore1');
        $valore2 = $req->get('valore2');
        $operazione = $req->get('operazione');

        $obj = New Calcolatrice();
        $risultato = null;
        switch ($operazione) {
            case 'somma':
                $risultato = $obj->somma($valore1, $valore2);
                break;
            case 'differenza':
                $risultato = $obj->differenza($valore1, $valore2);
                break;
            case 'prodotto':
                $risultato = $obj->moltiplicazione($valore1, $valore2);
                break;
            case 'quoziente':
                $risultato = $obj->divisione($valore1, $valore2);
                break;
            default:
                $risultato = 'error';
        }

        return $risultato;
    }
}
