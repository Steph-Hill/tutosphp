<?php

        include("poo.php");

        $majeur = new Majeur() ;

       


       //include("fonction.php");


    $prenom = "Stéphen";

    $nom = strtoupper("hillion");
    
    $age = 20;

    $affAge = true;


        echo $majeur->majeurOrNot($prenom,$nom,$age);

    
            


?>
