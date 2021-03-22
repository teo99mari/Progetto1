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


        $obj = new Calcolatrice();
        $result = [
           'Type:'=> $obj->getType(),
           'NumeroFunzioni:'=>$obj->getNumeroFunzioni()
        ];
        
        $obj2 = new CalcolatriceScientifica();
        $result2 = [
            'Type:'=>$obj2->getType(),
            'NumeroFunzioni:'=>$obj2->getNumeroFunzioni()
        ];
        return $result;


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
