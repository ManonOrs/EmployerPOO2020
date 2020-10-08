<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include "./classes/employe.php";
        include "./includes/Traitement.php";
        
        try {
            Traitement::instanciationUnEmploye();
        } catch (Exception $ex) {
            echo $ex->getMessage();
        }
                
        ?>
    </body>
</html>
