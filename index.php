<?php

use CaveJohnson\CaveJohnson;

include("vendor/autoload.php");

$johnson = new CaveJohnson();

echo "<img src='" . urldecode($johnson->getByName("404")['encoded']) . "'></img>";

foreach($johnson->getRandom(2) as $rand) {
    echo "<img src='" . urldecode($rand['encoded']) . "'></img>";
}

