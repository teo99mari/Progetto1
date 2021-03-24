<?php

namespace App\Http\Controllers\animali;
use Illuminate\Http\Request;

class AnimaliApiController {

    public function run(Request $req) {
        $returnValue = null;

        if (($req->animale) === 'leone') {
            $obj = new leone('luca', 'savana');
            $returnValue = $obj->verso();
        } elseif (($req->animale) == 'elefante') {
            $obj = new elefante('marco','parco');
            $returnValue = $obj->verso();
        }

        return $returnValue;
    }
}
