<?php

namespace App\Domain\ValueObjects;

/*
* Macro pode estar relacionada a tecnologia ou Equipamento ou cliente
*/
class Macro {
    public function __construct(public string $uuid, public string $name)
    {
    }
}