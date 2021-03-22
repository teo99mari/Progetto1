<?php

namespace App\Http\Controllers\Veicolo;
use Illuminate\Http\Request;

class ApiVeicoloController
{
    public function run(Request $req){

        $obj = new Veicolo(6);
        $obj->setTarga('QWERTY');
        $obj2 = new Automobile(4,'ABCDEF');
        $obj2->setVMax(130);
        $obj3 = new Motocicletta(2,'GHIL');
        $obj3->setVMax(50);
        return [
            [
                'NumeroRuote'=>$obj->getNumRuote(),
                'Targa'=>$obj->getTarga()
            ],
            [
                'Targa'=>$obj2->getTarga(),
                'NumeroRuote'=>$obj2->getNumRuote(),
                'VMax'=>$obj2->getVMax()
            ],
            [
                'Targa'=>$obj3->getTarga(),
                'NumeroRuote'=>$obj3->getNumRuote(),
                'VMax'=>$obj3->getVMax()
            ]
        ];
    }
}
