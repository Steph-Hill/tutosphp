<?php
    $card = [];
//test du Get value

        if(isset($_GET["nom"]) && isset($_GET["prix"]) ){

          //il ajoute dans le tab


            $item = [  
                                "nom" => $_GET["nom"],
                                "prix" => $_GET["prix"] 
                        ];
                        
            // lecture de mon cookie card

            if(!empty($_COOKIE["card"])){

                $card = unserialize($_COOKIE["card"]);

            }

            array_push($card , $item);


            $arrayToSerialize = serialize($card) ;

            setcookie("card", $arrayToSerialize , time() +3600*24);

            echo "votre produit a été ajouté !";

        }





?>

<a href="index.php">Retour </a>