<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "./classes/employe.php";
        include "./classes/projet.php";
        include "./includes/Traitement.php";
        
        try {
            Traitement::instanciationUnEmploye(); ?> </br> <?php
            //Traitement::instanciationUnEmployeErreur();
            Traitement::instanciationProjetV1(); ?> </br> <?php
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
                
        ?>
    </body>
</html>
