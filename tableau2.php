<?php



        $monTableauMulti = [["nom"=>"Zamant", "prenom"=>"Jerome"],

                            ["nom"=>"Dubois","prenom"=>"Yannis"],

                            ["nom"=>"Emmanuel","prenom"=>"Nicolas"]];


        

                           


            foreach ($monTableauMulti as $rowMulti) {

                echo $rowMulti["nom"]." ".$rowMulti["prenom"] ;

                echo"</br>";
            }


          /*  foreach ($monTableauMulti as $rowMulti){


                    foreach($rowMulti as $key => $row){

                        echo $key.": ".$row ;

                        echo "</br>";


                    }

                    echo "***************** </br></br>";

            }
*/








?>