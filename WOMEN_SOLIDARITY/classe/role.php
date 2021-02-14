<?php 

        class Role{
            private $idRole;
            private $libelle;
            private $level;

            public function __construct( $idRole='',$libelle='',$level=''){
                $this->idRole = $idRole;
                $this->libelle = $libelle;
                $this->level = $level;
            } 

            public function display(){
                include("connexion.php");
                $request = "SELECT * FROM `role` where idRole <> 1";
                $reponse = $PDO->query($request);
                $resultat = $reponse->fetchAll();
             return $resultat; 
            }
        }

?>