#!/usr/bin/env env php
<?php

include "user.php";

use app\v1\domain as domain;

function main()
{
    $user = new domain\User();
    echo "user: name={$user->getName()} age={$user->getAge()}\n";
}

main();
