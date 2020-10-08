<?php

class Traitement{
    public static function instanciationUnEmploye() : void {
        $e = new employe(1,"Dupont","Jacques", new DateTime("12/07/1980"), 1000.00);
        echo $e;
    }
}

