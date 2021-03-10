<?php


namespace App\Http\Controllers\animali;


class elefante extends animali
{
    protected $verso;

    public function __construct($nome, $habitat)
    {
        parent::__construct($nome,$habitat);
        $this->verso = 'ARRR';
    }

}
