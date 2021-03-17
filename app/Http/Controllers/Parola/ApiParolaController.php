<?php

namespace App\Http\Controllers\Parola;
use Illuminate\Http\Request;

class ApiParolaController {

    public function run(Request $req)
    {
        $parola = $req->post();

        $obj = new ParolaController();
        $data = [] ;

        foreach ($parola as $value) {
        $data [$value] = [
            'vocali' => $obj->vocali($value),
            'consonanti' => $obj->consonanti($value),
            'checkMaggiore' => $obj->checkMaggiore($value)
        ];

        }
        return $data;
    }
}
