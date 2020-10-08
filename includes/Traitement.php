<?php

class Traitement{
    public static function instanciationUnEmploye() : void {
        $e = new employe(1,"Dupont","Jacques", new DateTime("12/07/1980"), 1000.00);
        echo $e;
    }
    
    public static function instanciationUnEmployeErreur() : void {
        $e= new employe(2, "Durand", "Sylvie", new DateTime("1987/06/14"), 800.00);
        echo $e;
    }
}

