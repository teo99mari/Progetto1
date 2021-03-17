<?php

namespace App\Http\Controllers\Parola;
use Illuminate\Http\Request;

class ApiParolaController {

    public function run(Request $req) {
        $wordsArray = $req->post();
        $choice = $req->get('scelta');

        $obj = new ParolaController();

        $returnValues = [];
        foreach ($wordsArray as $word) {
            if ($choice === 'vocali') {
                $returnValues[$word] = [
                    'vocali' => $obj->vocali($word)
                ];
            } else if ($choice === 'consonanti') {
                $returnValues[$word] = [
                    'consonanti' => $obj->consonanti($word)
                ];
            } else {
                $returnValues[$word] = [
                    'vocali' => $obj->vocali($word),
                    'consonanti' => $obj->consonanti($word)
                ];
            }
        }

        return $returnValues;
    }
}
