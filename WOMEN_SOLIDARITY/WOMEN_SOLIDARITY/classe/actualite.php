<?php 

        class Actualite{

            private $idActualite;
            private	$idMembre;
            private $titre;	
            private $lien;	
            private	$photo;	
            private $dateA;

            public function __construct( $idActualite='',	$idMembre='',	$titre='',	$lien='',	$resume='',	$photo='',$dateA=''){

                $this->idActualite=$idActualite;
                $this->idMembre=$idMembre;
                $this->titre=$titre;
                $this->lien=$lien;
                $this->photo=$photo;
                $this->dateA=$dateA;

            }


            public function newActualite($idMembre,	$titre,	$lien,$photo,$date){

                    include("connexion.php");

                    $request = "INSERT INTO `actualite`( `idMembre`, `titre`, `lien`,  `photo`, `dateA`)  VALUES ('$idMembre','$titre',	'$lien','$photo','$date') ";
                    if($PDO->exec($request)){
                        return true;
                    }else{
                                 echo"<script>";
                                 echo "alert('Data base error ')";
                                 echo"</script>";
                    }
            }


            public function display(){
                   
                include("connexion.php");
                $request = "SELECT * FROM `actualite`   ";
                $reponse = $PDO->query($request);
                $resultat = $reponse->fetchAll();
                return $resultat;  

            }


            public function displayI($date){
                   
                include("connexion.php");
                $request = "select * from actualite where dateA = '$date' ";
                $reponse = $PDO->query($request);
                $resultat = $reponse->fetchAll();
                return $resultat;  

            }

            public function delete($idActualite ){

                include("connexion.php");

                $request = "delete from actualite where idActualite  = '$idActualite '";
                if($PDO->exec($request)){
                    header("Location:actualite.php");
                }else{
                            echo"<script>";
                            echo "alert('Data base error ')";
                            echo"</script>";
                }

            }
            
            
        }


?>