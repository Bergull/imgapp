<?php

function autoloadFunkce($trida) {
    // Končí název třídy řetězcem "Kontroler" ?
    if (preg_match('/Controller$/', $trida)) {
        require("controllers/" . $trida . ".php");
    } else {
        require("models/" . $trida . ".php");
    }
}

spl_autoload_register("autoloadFunkce");

$smerovac = new RouterController();
$smerovac->zpracuj(array($_SERVER['REQUEST_URI']));

$smerovac->showView();
?>