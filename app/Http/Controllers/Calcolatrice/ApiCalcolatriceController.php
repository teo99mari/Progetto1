<?php

namespace App\Http\Controllers\Calcolatrice;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Callable_;

class ApiCalcolatriceController
{
    public function run(Request $req) {
        $valore1 = $req->get('valore1');
        $valore2 = $req->get('valore2');
        $operazione = $req->get('operazione');

        $obj  = new Calcolatrice();
        $obj2 = new CalcolatriceScientifica();
        $obj3 = new CalcolatriceScientifica();
        $obj3->setNumFunctions(20);

        return [
            [
                'type' => $obj->getType(),
                'num_function' => $obj->getNumeroFunzioni(),
            ],
            [
                'type' => $obj2->getType(),
                'num_function' => $obj2->getNumeroFunzioni(),
            ],
            [
                'type' => $obj3->getType(),
                'num_function' => $obj3->getNumeroFunzioni(),
            ],
            [
                'type' => $obj2->getType(),
                'num_function' => $obj2->getNumeroFunzioni(),
            ]
        ];


        /*$risultato = null;
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

        return $risultato;*/
    }
}
