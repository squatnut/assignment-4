<?php

include "mem.php";
include "dvd_title.php";

function TestConstructor() {
    // arrange
    $t0 = new DvdTitle();
    $memP = new Mem($t0);
    print_r($memP);
    if ($memP->Count() != 1) {
        die("TestConstructor FAILED" . PHP_EOL);
    }
    echo "TestConstructor OK" . PHP_EOL;
}

TestConstructor();
