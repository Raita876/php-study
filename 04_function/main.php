#!/usr/bin/env env php
<?php

function NewUser(string $name = "tanaka", int $age = 23)
{
    echo "name={$name}\n";
    echo "age={$age}\n";
    echo "\n";
}

function DoSomething(string &$value)
{
    $value = "hoge";

    echo "value={$value}\n";
}

function main()
{
    NewUser();
    NewUser("zusuki", 31);
    $str = "fuga";
    DoSomething($str);
    echo "str={$str}\n";
}

main();
