<?php

namespace App\Http\Controllers\FunzioniVitali;
use Illuminate\Http\Request;

class ApiFunzioniVitaliController {

    public function run (Request $req){

        $calciatoreObj = new CalciatoreController('si','attaccante');
        $dirigenteObj = new DirigenteController('si',70000);
        $caneObj = new CaneController('si',30);
        $tartarugaObj = new TartarugaController('si');

        return [
            'calciatore' =>[
                'Cibo'    =>    $calciatoreObj->mangia('pasta'),
                'Sonno'   =>    $calciatoreObj->dormi('8'),
                'ruolo'   =>    $calciatoreObj->ruolo(),
                'respiro' =>    $calciatoreObj->respira()
            ],
            'dirigente' =>[
                'Cibo'    =>    $dirigenteObj->mangia('pizza'),
                'Sonno'   =>    $dirigenteObj->dormi('8'),
                'ruolo'   =>    $dirigenteObj->stipendio(),
                'respiro' =>    $dirigenteObj->respira()
            ],
            'cane' =>[
                'Cibo'    =>    $caneObj->mangia('croccantini'),
                'Sonno'   =>    $caneObj->dormi(''),
                'ruolo'   =>    $caneObj->peso(),
                'respiro' =>    $caneObj->respira()
            ],
            'tartaruga' =>[
                'Cibo'    =>    $tartarugaObj->mangia('insalata'),
                'Sonno'   =>    $tartarugaObj->dormi('10'),
                'respiro' =>    $tartarugaObj->respira()
            ],
        ];
    }
}
