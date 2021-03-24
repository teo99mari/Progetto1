<?php


namespace App\Http\Controllers\Person;

use App\Models\Book;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class SearchController {
    public function run(Request $req) {
        $user = User::where('nome', 'like', 'matteo')->first(); //il primo utente di nome matteo
        $books = $user->books()->get(); //tutti i libri appartenenti allo user di nome matteo

        $user2 = User::select('id', 'cognome')->where('nome', 'matteo')->get(); //seleziona solo ID e COGNOME degli utenti di NOME matteo

        $book = Book::where('titolo', 'mein l')->first();  //seleziona il NOME e il COGNOME di tutti gli user che hanno letto il primo libro nel db che ha come titolo mein l
        $users = $book->users()->select('nome', 'cognome')->get();

        $book3 = Book::where('pagine', '>', '280')->select('titolo')->get();  //seleziona il titolo di tutti i libri che hanno più di 280 pagine


        return $book3;
    }
}
