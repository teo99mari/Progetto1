<?php

namespace App\Http\Controllers\Calcolatrice;

use Illuminate\Http\Request;

class ApiCalcolatriceController
{
    public function run(Request $req) {
        $valore1 = $req->get('valore1');
        $valore2 = $req->get('valore2');
        $operazione = $req->get('operazione');

        $obj = New Calcolatrice($valore1, $valore2);

        if ($operazione === 'somma') {
            return $obj->somma();
        } else if ($operazione === 'differenza') {
            return $obj->differenza();
        }else if ($operazione === 'prodotto') {
            return $obj->moltiplicazione();
        }else if ($operazione === 'quoziente') {
            return $obj->divisione();
        } else {
            return 'errore';
        }
    }
}
