<?php


namespace App\Http\Controllers\animali;


abstract class animali
{
    protected $nome;
    protected $habitat;

    public function __construct($nome, $habitat)
    {
        $this->nome = $nome;
        $this->habitat = $habitat;
    }
    abstract public function verso();


}
