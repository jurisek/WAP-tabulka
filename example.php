<?php
require 'trida.php'; //načtení třídy
$tabulka = new tabulka(5, 5); //vygeneruje novou tabulku
$pole = array(
    0 => array("zaznam1","zaznam2","zaznam3","zaznam4","zaznam5"), //vložení záznamů
    1 => array("zaznam1","zaznam2","zaznam3","zaznam4","zaznam5"),
    2 => array("zaznam1","zaznam2","zaznam3","zaznam4","zaznam5"),
    3 => array("zaznam1","zaznam2","zaznam3","zaznam4","zaznam5"),
    4 => array("zaznam1","zaznam2","zaznam3","zaznam4","zaznam5"),
    5 => array("zaznam1","zaznam2","zaznam3","zaznam4","zaznam5")
);
$tabulka->setheader("záznam1;záznam1;záznam1;záznam1;záznam1"); //vložení nadpisů
$tabulka->naplntabulku($pole); //vložení naplní tabulku daty
echo $tabulka; //vypíše tabulku

