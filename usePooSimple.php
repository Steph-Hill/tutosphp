<?php

    include("pooSimple.php");

    $simpleTest = new Simple();

    //echo $simpleTest->nomPrive; impossible car variable privée, elle est en mode private.

    echo $simpleTest->nomPublique;

?>