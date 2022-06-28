<?php

namespace App\Domain\ValueObjects;

class Vehicle {
    public function __construct(private string $uuid)
    {
    }
}