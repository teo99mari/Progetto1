<?php
class Employee extends Person{
    private $profile, $id;

    public function __construct(string $profile, string $id)
    {
        $this->profile = $profile;
        $this->profile = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getProfile()
    {
        return $this->profile;
    }
}
