<?php

namespace App\Http\Controllers\Ristorante;

use Illuminate\Http\Request;

class InsertMenuController {

    public function run(Request $req) {
        $returnValues = [];
        $data = $req->post();

        var_dump($data); die;
    }

}
