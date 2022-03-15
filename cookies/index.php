<?php

    // products array
    $products = [
        ["nom"=> "pain", "prix"=> 1],
        ["nom"=> "sucre", "prix"=> 2.5],
        ["nom"=> "pile", "prix"=> 5],
        ["nom"=> "pommes", "prix"=> 1.5],
        ["nom"=> "jus", "prix"=> 3], 


    ];

   // var_dump($products);



            foreach ($products as $product) {

                $linkAdd = "addToCard.php?nom=".$product["nom"]."&prix=".$product["prix"];

                ?>

                    <?php echo $product["nom"]; ?> -
                    <?php echo $product["prix"]; ?>
                    <a href="<?php echo $linkAdd ;?>">Add</a>
                    </br>
                <?php


                
            }
?>

<br>

Mon Caddie :
<br>

<?php


                if(!empty($_COOKIE["card"])){

                    $myCard = unserialize($_COOKIE["card"]) ;
                        $total =0;

                    foreach ($myCard as $item){

                        $total = $total + $item["prix"];
                        
                        ?>

                            <?php echo $item["nom"] ;?>
                            <?php echo $item["prix"] ;?>
                            <br>

                        <?php

                    }

                    echo "Total : $total ";

                }else{

                    echo "votre panier est vide" ;

                }

?>