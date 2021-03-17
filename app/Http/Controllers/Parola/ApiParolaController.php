<?php

namespace App\Http\Controllers\Parola;
use Illuminate\Http\Request;

class ApiParolaController {

    public function run(Request $req)
    {
        $parola = $req->post();
        $scelta = $req->get('scelta');

        $obj = new ParolaController();

        $array = [];

        foreach ($parola as $value) {
        if ($scelta == 'vocali') {
            return $obj->vocali($value);
        } else if ($scelta == 'consonanti') {
            return $obj->consonanti($value);
        } else {
            return [$obj->vocali($value), $obj->consonanti($value)];
        }
    }
        $data = [];

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
