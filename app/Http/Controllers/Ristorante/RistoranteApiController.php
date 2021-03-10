<?php


namespace App\Http\Controllers\Ristorante;


class RistoranteApiController extends RistoranteController
{
    public function getMenu(){
        $obj = new RistoranteController();

    }

    public function setMenu(){
        $obj = new RistoranteController();
        $obj->setMenu('focaccia', 'pasta', 'carne', 'gelato');

        return $obj->getMenu();
    }

}
