<?php

namespace App\Http\Controllers\Book;

use App\Models\Book;
use Illuminate\Http\Request;

class AddController {

    public function run(Request $req) {
        $returnValues = [];

        foreach ($req->post() as $bookDb) {
            $books = new Book;
            $books->titolo = $bookDb ['titolo'];
            $books->pagine = $bookDb ['pagine'];
            $books->editore = $bookDb ['editore'];
            $books->isbn = $bookDb ['isbn'];
            $books->save();
            $returnValues['ok'][] = $books->id;
        }

        return ($returnValues);
    }
}
