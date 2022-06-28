<?php

namespace App\Domain\ValueObjects;

class Client {
    public function __construct(private string $uuid)
    {
    }
}