#!/usr/bin/env env php
<?php
require(dirname(__FILE__) . "/../vendor/autoload.php");

use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

function main()
{
    $log = new Logger("name");
    $log->pushHandler(new StreamHandler("php://stdout", Level::Info));

    $log->info("Thia is INFO");
    $log->warning("This is WARNING");
    $log->error("This is ERROR");
}

main();
