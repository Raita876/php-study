#!/usr/bin/env env php
<?php

function error(int $i)
{
    if ($i < 0) {
        throw new Exception("{$i} は 0 より少ない数字です。");
    }

    echo "{$i}\n";
}

try {
    error(100);
    error(99);
    error(-5);
} catch (Exception $e) {
    // $message = $e->getMessage();
    echo "{$e->getMessage()}\n";
}

echo "End\n";
