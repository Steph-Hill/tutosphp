<?php

class Simple {

    private $nomPrive = "toto";
    public  $nomPublique = "Hillion";

    public function getNomPrive(){

        return $this->nomPrive ;

    }
   
    public function setNomPrive($nom){

        return $this->nomPrive = $nom ;

    }

}


?>