<?php

        function majeurOrNot($nom, $prenom, $age){
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


                return $affSortie;



        }



?>