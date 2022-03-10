<?php

            $virgule = " , ";
            $maVariableChaine ="Bonjour";
            $maVariableChaine = $maVariableChaine." le monde ";
            $maVariableChaine .= " ! ";
            $maVariableChaine .= $virgule;

            //$1monNombre : mauvause eccriture, on ne met pas le numero en premier
            //monNombre1 : est la bonne ecriture
                        
            echo $maVariableChaine."</br>" ;

            $monNombre1 = 17 ;

            $monNombre2 = 20 ;

            $somme = $monNombre1 + $monNombre2;

            echo "somme de " .$monNombre1 . " + ". $monNombre2 . " = ". $somme;

            echo "</br>";

            $myBoolean = true ;

            var_dump($myBoolean);

            echo "</br>";

            $monTaleauSimple = ["Jerome","Yannis","Nicolas"] ;

            var_dump($monTaleauSimple) ;


            echo "</br>";

            $monTaleauMulti = [["nom"=>"Zamant", "prenom"=>"Jerome"],

                                ["nom"=>"Dubois","prenom"=>"Yannis"],

                                ["nom"=>"Emmanuel","prenom"=>"Nicolas"]
                                
                                ];

            var_dump($monTaleauMulti);

            



?>