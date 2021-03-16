<?php

namespace App\Http\Controllers\Parola;
use Illuminate\Http\Request;

class ApiParolaController {

    public function run(Request $req) {
        $parola = $req->get('parola');

        $obj = new ParolaController();

        return [
            'vocali' => $obj->vocali($parola),
            'consonanti' => $obj->consonanti($parola),
            'checkMaggiore' => $obj->checkMaggiore($parola)
        ];
    }
}
