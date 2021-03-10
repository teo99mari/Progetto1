<?php


namespace App\Http\Controllers\Ristorante;


class RistoranteController
{
    protected $antipasto;
    protected $primo;
    protected $secondo;
    protected $dolce;

    public function setMenu($antipasto, $primo, $secondo, $dolce){
        $this->antipasto = $antipasto;
        $this->primo = $primo;
        $this->secondo = $secondo;
        $this->dolce = $dolce;
    }
    public function getMenu(){
        return [
            $this->antipasto => 'antipasto',
            $this->primo => 'primo',
            $this->secondo = 'secondo',
            $this->dolce = 'dolce'
        ];
    }


}
