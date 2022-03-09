<?php

    $prenom = "Stéphen";

    $nom = "HILLION";
    
    $age = "20";

    $affAge = true;




    $affSortie = "Bonjour";

    if($age > 21){

        $affSortie = $affSortie . " "
                . $prenom. " ". $nom 
                . " vous etes majeur";


        }else {

            $affSortie = $affSortie. " "
                    .$prenom ." ". $nom
                    ." vous n'etes pas majeur !";
        }

    echo $affSortie;

    /*echo $nom
            ." "
            .$prenom
            . "  vous avez "
            . $age
            ." ans."
            ." félicitation!!!!";*/





?>