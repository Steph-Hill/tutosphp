<?php


           // $monTableauSimple = [""] ;

            $monTableauSimple = ["Jerome","Yannis","Nicolas"] ;
            

            function premierElementTableau($monTableauSimple){

                if ($monTableauSimple == [""]){

                    return "null" ;

                }else{

                    return $monTableauSimple[0];

                }

            }


            echo premierElementTableau($monTableauSimple);

            var_dump($monTableauSimple);



           
?>