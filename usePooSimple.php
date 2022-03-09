<?php

    include("pooSimple.php");

    $simpleTest = new Simple();


    echo $simpleTest->nomPublique."<br>";

    $simpleTest->nomPublique="Gulliano";

    echo $simpleTest->nomPublique."<br>";
    
    //echo $simpleTest->nomPrive; impossible car variable privée, elle est en mode private.

    echo $simpleTest->getNomPrive()."<br>";

    $simpleTest->setNomPrive("Stephen");

    echo $simpleTest->getNomPrive() ."<br>";


?>