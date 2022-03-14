<?php


        $TabNumber = [2,5,50,58700,5000];

        function plusGrand($monTableau){

           $x = 0; 

            foreach ($monTableau as $nombre){

                if ($nombre>$x){

                    $x = $nombre;

                }

                
            }

                return $x ;


        }

        echo plusGrand($TabNumber); 




?>