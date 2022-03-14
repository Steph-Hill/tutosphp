<?php
    include("poo2.php");
//instense faite
    /*$infoFamille = new Famille ();
//pour lire
    echo $infoFamille->getNom();*/

    $infoGustave = new Famille();

    $infoGustave->prenom = "jhon";

    echo" infoGustave->prenom :".$infoGustave->prenom;

    $infoEmmanuel = new Famille();
    $infoEmmanuel->prenom = "Nicolas";

    echo "<br> onfoEmmanuel->prenom :".$infoEmmanuel->prenom ;
//permet de modifier
    $infoGustave->setNom("Thomassi");
    echo "<br>".$infoGustave->getNom();




?>