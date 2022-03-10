<?php

    // valeur par defaut a appliquer dans resultat pour "boucle.php?nombre ="
    $nombre = 0;
    // on verifie si la variable est déclaré ou est != de null
    if (isset($_GET["nombre"])) {
        //on pose le if pour sécuriser la variable $nombre si elle devient null
        if ($_GET["nombre"] != "") {
            $nombre = $_GET["nombre"];
        }
    }


     /* if (isset($_GET["nombre"]) && ($_GET["nombre"] != "")) {
        
            $nombre = $_GET["nombre"];

    }*/
 

    for($i=0; $i < 10; $i++) { 
 
        $calcul = $nombre * $i;

        echo $nombre." x ". $i. " = ". $calcul;
        echo "</br>";

    }


    echo "</br>";

    /* $a=0;

   while ($a <= 10) {
        $calcul = $nombre*$a;

        echo $nombre." x ". $a. " = ". $calcul;
        echo "</br>";   
     
        $a++;

    }*/
       

?>