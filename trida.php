<?php

/**
 * Třída Tabulka
 * @license BSD
 * @author David Jurajda <jurisek008@seznam.cz>
 */
class tabulka {

    /**
     * Zde se uloží do pole všechny záznamy
     * @var array  
     */
    private $polezaznamu = array();

    /**
     * Uložení názvu tabulky
     * @var string 
     */
    private $nazev;

    /**
     * Uložení všech nadpisů sloupů
     * @var array 
     */
    private $header = array();

    /**
     * Počet sloupců
     * @var string  
     */
    private $sloupcu;

    /**
     * Počet řádků
     * @var string  
     */
    private $radku;

    /**
     * Zde je uloženo id třídy 
     * @var string 
     */
    private $idclas;

    /**
     * Zde je uložena název id třídy
     * @var string  
     */
    private $nazevid;

    /**
     * Konstruktor třídy
     */
    public function __construct($a, $b) {
        $this->sloupcu = $a;
        $this->radku = $b;
    }

    /**
     * Nastavení hlavičky tabulky 
     * @param string $arrayhead pole s hodnotamy naspisů
     * @return string Vrátí text
     */
    public function setheader($arrayhead) {
        $p = explode(";", $arrayhead);
        if (count($p) == $this->sloupcu) {
            $this->header = $p;
        } else {
            $r = "pocet zadanych hodnot v hlavicce nesouhlasi s poctem sloupcu";
            return $r;
        }
    }

    /**
     * Nastaví daspis
     * @param string $nadpis Nastaví název
     */
    public function setnadpis($nadpis) {
        $this->nazev = $nadpis;
    }

    /**
     * Nastaví třídu
     * @param string $idorclass Název CLassy
     * @param string $nazevid Název ID
     */
    public function setidorclass($idorclass, $nazevid) {
        if ($idorclass == "class" or $idorclass == "id") {
            $this->idclass = $idorclass;
        }
        $this->nazevid = $nazevid;
    }
/**
 * Naplní tabulku daty
 * @param array $array naplní tabulku z pole
 */
    public function naplntabulku($array) {
        $this->polezaznamu = $array;
    }
/**
 * Vydeneruje tabulku
 * @return string Vrátí vygenerovanou tabulku
 */
    public function __toString() {
        $string = "";
        $string = $string . "<table>";
        $string = $string . "<tr>";
        for ($j = 0; $j < $this->sloupcu; $j++) {
            $string = $string . "<th>";
            $string = $string . $this->header[$j];
            $string = $string . "</th>";
        }
        $string = $string . "</tr>";
        for ($i = 0; $i < $this->sloupcu; $i++) {
            $string = $string . "<tr>";
            for ($k = 0; $k < $this->radku; $k++) {
                $string = $string . "<td>";
                $string = $string . $this->polezaznamu[$i][$k];
                $string = $string . "</td>";
            }
            $string = $string . "</tr>";
        }
        $string = $string . "</table>";
        return $string;
    }

}
