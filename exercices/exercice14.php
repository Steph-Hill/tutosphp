<?php

                //$monTableauSimple = [""] ;

                $monTableauSimple = ["Jerome","Yannis","Nicolas"] ;
                            


            function dernierElementTableau($monTableauSimple){

                if ($monTableauSimple == [""]){

                    return "null" ;

                }else{

                    return $monTableauSimple[2];

                }

            }


            echo dernierElementTableau($monTableauSimple);



?>