<?php


$monTableau = [] ;


        function dernierElementTableau($monTableau){

                if(count($monTableau) == 0){

                    return null;

                }else{

                    $monDernierIndex = count($monTableau) -1;

                    return $monTableau[$monDernierIndex];
                       
                }


        }

        echo dernierElementTableau($monTableau);

        echo count($monTableau);


?>