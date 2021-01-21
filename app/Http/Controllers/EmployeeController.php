<?php

namespace App\Http\Controllers;

class EmployeeController extends PersonController {
    private $profilo, $id;

    public function __construct( $profilo,  $id,  $nome,  $cognome,  $eta,  $altezzaInMetri)
    {
        $this->profilo = $profilo;
        $this->id = $id;
        parent::__construct($nome, $cognome, $eta, $altezzaInMetri);
    }

    public function getProfilo()
    {
        return $this->profilo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setProfilo(string $profilo)
    {
        $this->profilo = $profilo;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }
}
