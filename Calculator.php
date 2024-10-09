<?php

interface Funkcijos {
    function sudetis($skaicius1, $skaicius2) : int;
    function atimtis($skaicius1, $skaicius2) : int;
    function sandauga($skaicius1, $skaicius2) : int;
    function dalyba($skaicius1, $skaicius2) : int;

}


class Calculator implements Funkcijos{

    CONST CLASS_USE = "Skaičiuotuvo klasė, kuri atlieka skaičiavimus";

    function sudetis($skaicius1, $skaicius2) : int {
        return ($skaicius1 + $skaicius2);
    }

    function atimtis($skaicius1, $skaicius2) : int {
        return ($skaicius1 - $skaicius2);
    }

    function sandauga($skaicius1, $skaicius2) : int {
        return ($skaicius1 * $skaicius2);
    }

    function dalyba($skaicius1, $skaicius2) : int {
        return ($skaicius1 / $skaicius2);
    }
}