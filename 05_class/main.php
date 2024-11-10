#!/usr/bin/env env php
<?php

interface Human
{
    public function getName(): string;
    public function getAge(): int;
}

class User implements Human
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

function NewUser(string $name = "tanaka", int $age = 23): User
{
    return new User(
        name: $name,
        age: $age,
    );
}

function main()
{
    $user1 = NewUser();
    $user2 = NewUser(
        name: "suzuki",
        age: 32,
    );

    echo "user1: name={$user1->getName()} age={$user1->getAge()}\n";
    echo "user2: name={$user2->getName()} age={$user2->getAge()}\n";
}

main();
