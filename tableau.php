<?php


$monTableauSimple = ["Jerome",
                    "Yannis",
                    "Nicolas"] ;

//one item

    echo $monTableauSimple[2];
    
    echo "</br>";
    echo "=======================";
    echo "</br>";
    
  

//print all item in my array

    for ($i=0; $i < 3; $i++) { 
        
        echo $monTableauSimple [$i];
        echo "</br>";  
           
    }

    echo "</br>";
    echo "=======================";
    echo "</br>";



     for ($i=0; $i < count($monTableauSimple); $i++) { 
        
        echo $monTableauSimple [$i];
        echo "</br>";    
     
    }

    echo "</br>";
    echo "=======================";
    echo "</br>";

    for ($i=count($monTableauSimple)-1; $i >=0 ; $i--) { 
        
        echo $monTableauSimple [$i];
        echo "</br>";    
           
    }
    
    echo "</br>";
    echo "=======================";
    echo "</br>";


    foreach($monTableauSimple as $index => $row){

        echo $index." - ".$row;
        echo "</br>";


    }







?>