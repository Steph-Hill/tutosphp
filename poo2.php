<?php

    class Famille {

        private $nom = "Gustave";
        public $prenom = "Guliano";
//pour afficher la variable privée
            function getNom(){
                        
            return $this->nom ;

                    }
//pour modifier la variable privée
        public function setNom($nom){

            $this->nom = $nom;

        }
                


    }

        



?>