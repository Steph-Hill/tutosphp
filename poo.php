<?php

 class Majeur {

    public $nom="";

    function majeurOrNot($prenom, $age){
        $affSortie = "Bonjour";


            if($age > 21){

                    $affSortie = $affSortie . " "
                            . $prenom. " ". $this->nom 
                            . " vous etes majeur";
            
            
                    }else {
            
                    $affSortie = $affSortie. " "
                            .$prenom ." ". $this->nom
                            ." vous n'etes pas majeur !";
                    }


            return $affSortie;



    }
 }


?>