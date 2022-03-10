<?php


        //ET = &&
        $vraiEtFaux = true && false ;
        var_dump($vraiEtFaux);
        
    
        $vraiEtVrai = true && true ;
        var_dump($vraiEtVrai);

        
        $fauxEtFaux = false && false ;
        var_dump($fauxEtFaux);

    echo "</br>";

        // OU = ||
        $vraiEtFaux = true || false ;
        var_dump($vraiEtFaux);
        
    
        $vraiEtVrai = true || true ;
        var_dump($vraiEtVrai);

        
        $fauxEtFaux = false || false ;
        var_dump($fauxEtFaux);

    
        echo "</br>";
    
    $age = 12;

    if($age == 12){

        echo "age = 12"."</br>";

    }

    echo "</br>";
    
    if($age != 30){

        echo "age est differant de 30";

    }


    echo "</br>";    

    if($age < 30){

        echo "age < 30";

    }
    echo "</br>"; 
    
    if($age > 10){

        echo "age > 10";

    }
    echo "</br>"; 
    
    if(($age > 10) && ($age < 30)){

        echo "10 < $age < 30 ";

    }



?>