<?php

namespace App\Http\Controllers\Ristorante;

use App\Models\Menu;
use Illuminate\Http\Request;

class InsertMenuController {

    public function run (Request $req) {
        $data = $req->post();

        $menu = new Menu;
        $menu->antipasto = $data['antipasto'];
        $menu->primo = $data['primo'];
        $menu->secondo = $data['secondo'];
        $menu->dolce = $data['dolce'];
        $menu->save();

        return [
            'status' => 'ok',
            'id' => $menu->id
        ];
    }
}
