<?php

namespace App\Http\Controllers\Book;
use App\Models\Book;
use Illuminate\Http\Request;

class SearchController {

    public function run(Request $req) {
        $emptyArray = [];

        foreach (Book::all()->toArray() as $libro) {
            if (($libro['pagine']) >= 200) {
                $emptyArray[] = $libro['titolo'];
            }
        }

        return $emptyArray;
    }
}
