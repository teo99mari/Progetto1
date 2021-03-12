<?php

namespace App\Http\Controllers\Ristorante;

use App\Models\Menu;
use Illuminate\Http\Request;

class InsertMenuController {

    public function run (Request $req) {
        $data = $req->post();

        $menuIds = [];
        foreach ($data as $element) {
            if(($element['giorno']) !== 'sabato'){
                $menu = new Menu;
                $menu->antipasto = $element['antipasto'];
                $menu->primo = $element['primo'];
                $menu->secondo = $element['secondo'];
                $menu->dolce = $element['dolce'];
                $menu->giorno = $element['giorno'];
                $menu->save();

                $menuIds[] = $menu->id;
            }
        }

        return [
            'status' => 'ok',
            'id' => $menuIds
        ];
    }
}
