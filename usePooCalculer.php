<?php

    include("pooCalculer.php");


    $monOperation = new Calculer();

        $monOperation->nombre = 12 ;

        $monOperation->operateur = "-" ;

        $monOperation->operande = 5 ;

    $monOperation->affResultat();
    
   
   // var_dump($monOperation);



?>