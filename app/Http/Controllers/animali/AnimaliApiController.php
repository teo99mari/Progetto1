<?php


namespace App\Http\Controllers\animali;
use Illuminate\Http\Request;


class AnimaliApiController
{
    public function run(Request $req){

        if(($req->animale) == 'leone') {

            $obj = new leone('luca', 'savana');
            return $obj->verso();
        }elseif(($req->animale) == 'elefante') {

            $obj = new elefante('marco','parco');
            return $obj->verso();
        }
    }
}
