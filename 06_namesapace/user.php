<?php

namespace app\v1\domain;

class User
{
    private string $name;
    private int $age;

    function __construct(
        string $name = "tanaka",
        int $age = 23,
    ) {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }
}
