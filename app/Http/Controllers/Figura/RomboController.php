<?php

namespace App\Http\Controllers\Figura;

class RomboController extends FiguraGeometricaController{
    protected $lato;
    protected $altezza;
    protected $diagonaleMaggiore;
    protected $diagonaleMinore;

    public function __construct($numeroLati, $lato, $diagonaleMaggiore, $diagonaleMinore){
        $this->numeroLati = $numeroLati;
        $this->latoA = $lato;
        $this->diagonaleMaggiore = $diagonaleMaggiore;
        $this->diagonaleMinore = $diagonaleMinore;
    }

    public function calcolaPerimetro(){
        return $this->lato * 4;
    }

    public function calcolaArea(){
        return ($this->diagonaleMaggiore * $this->diagonaleMinore) / 2;
    }
}
