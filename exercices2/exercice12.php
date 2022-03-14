<?PhP

            function pluPetit($nombre1,$nombre2,$nombre3){

                        $petit = $nombre1;

                    if ($nombre1 > $nombre2){

                         $petit = $nombre2 ;

                    }if ($petit > $nombre3){

                        $petit = $nombre3;

                    }

                    return $petit ;

            }


            echo PluPetit(100,500,0.5);





?>