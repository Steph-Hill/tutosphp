<?php


           /*function plusPetit($nombre1,$nombre2,$nombre3) {

                if (($nombre1>$nombre3) && ($nombre2>$nombre3)) {

                    return $nombre3;

                }else if (($nombre3>$nombre2) && ($nombre1>$nombre2)) {

                    return $nombre2;
    
                }else if (($nombre1<$nombre2) && ($nombre1<$nombre3)){

                    return $nombre1;

                }

            }*/

           // echo plusPetit(15,10,200);





                    function plusPetit($nombre1,$nombre2,$nombre3){

                        $nombrePetit = $nombre1 ;

                        if($nombre1>$nombre2){

                            $nombrePetit = $nombre2 ;

                        }if($nombrePetit>$nombre3){

                            $nombrePetit = $nombre3 ;

                        }

                        return $nombrePetit ;
                        
                    }


                    echo plusPetit(5,100,7);






?>