<?php

namespace App\Http\Controllers\Veicolo;
use Illuminate\Http\Request;

class ApiVeicoloController
{
    public function run (Request $req) {
        $automobileObj = new Automobile(4,'ABCDEF', 210);
        $motociclettaObj = new Motocicletta(2,'GHIL', 180);

        return [
           [
               'type' => 'Automobile',
               'numero_ruote' => $automobileObj->getNumRuote(),
               'velocità_massima' => $automobileObj->getVMax(),
               'azione' => $automobileObj->azionaTergicristallo()
           ],
            [
                'type' => 'Motocicletta',
                'numero_ruote' => $motociclettaObj->getNumRuote(),
                'velocità_massima' => $motociclettaObj->getVMax(),
                'azione' => $motociclettaObj->mettiCasco()
            ]
        ];
    }
}
