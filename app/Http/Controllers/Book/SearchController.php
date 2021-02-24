<?php


namespace App\Http\Controllers\Book;
use App\Models\Book;
use Illuminate\Http\Request;

class SearchController
{
    public function run(Request $req)
    {
        /*$test = Book::where('pagine', '>=', '200' )->select('titolo','id','isbn')->get();
        return $test;*/



        $emptyArray = [];
        $libri = Book::all()->toArray();
        foreach ($libri as $libro){
            if (($libro['pagine']) >= 200)
            {
                $emptyArray[]= $libro['titolo'];
            }
        }
        return ($emptyArray);
    }
}
