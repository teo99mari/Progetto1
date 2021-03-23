<?php

namespace App\Http\Controllers\Figura;
use Illuminate\Http\Request;

class ApiFiguraGeometricaController
{
    public function run (Request $req){
     $quadratoObj = new QuadratoController(2,4); //Istanzio classe figlia e NON posso istanziare classe padre astratta
     $triangoloObj = new TriangoloController(3,4,6,7);

     return [
         'quadrato' => [
             'numero_lati' => $quadratoObj->getNumeroLati(),
             'perimetro'   => $quadratoObj->calcolaPerimetro(),
             'area'        => $quadratoObj->calcolaArea(),
             'diagonale'   => $quadratoObj->calcolaDiagonale(),
         ],
         'triangolo' => [
             'numero_lati' => $triangoloObj->getNumeroLati(),
             'perimetro' => $triangoloObj->calcolaPerimetro(),
             'area' => $triangoloObj->calcolaArea()
         ]
     ];
    }
}
