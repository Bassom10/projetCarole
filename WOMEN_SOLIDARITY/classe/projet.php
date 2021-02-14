<?php 

            class projet{

                private $idProjet;
                private $nom;
                private $description;
                private $image;
                private $pays;
                private $domaine;
                private $adresse;
                private $datepj;

                public function __construct( $idProjet='',	$nom='',	$description='',	$datepj='',	$image='',	$pays='',	$domaine='',	$adresse=''){
                    $this->idProjet = $idProjet;
                    $this->nom = $nom;
                    $this->description = $description;
                    $this->datepj = $datepj;
                    $this->image = $image;
                    $this->pays = $pays;
                    $this->domaine = $domaine;
                    $this->adresse = $adresse;
                }

                public function ajouter($idMembre,$nom,$desciption,$pays,	$domaine,	$adresse,$site){
                      
                    include("connexion.php");

                    $request = "INSERT INTO `projet` ( `idMembre`, `nom`, `description`, `pays`, `adresse`, `domaine` , `site`) VALUES   ('$idMembre','$nom','$desciption','$pays','$adresse','$domaine','$site') ";

                    if($PDO->exec($request)){

                       header("Location:compte.php");
                       
                    }else{
                                echo"<script>";
                                echo "alert('Data base error ')";
                                echo"</script>";
                    }


                }


                public function listeMembre($id)
                {
                    include("connexion.php");
                       $requete = "SELECT * FROM `projet` WHERE `idMembre`=$id ";
                       $reponse = $PDO->query($requete);
                       $resultat = $reponse->fetchAll();
                    return $resultat; 
                       
                }

                public function display()
                {
                    include("connexion.php");
                       $requete = "SELECT * FROM `projet` ";
                       $reponse = $PDO->query($requete);
                       $resultat = $reponse->fetchAll();
                    return $resultat; 
                       
                }

                public function modifierPhoto($idMembre,$photo){
                    include("connexion.php");
                    $request = "UPDATE `projet` SET `image`= '$photo' WHERE `idProjet`= $idMembre";
                    if($PDO->exec($request)){
                        header("Location:compte.php");
                    }else{
                                echo"<script>";
                                echo "alert('Data base error ')";
                                echo"</script>";
                    }
                }

                public function delete($idUser,$idProjet){
                    include("connexion.php");
                    $request = "DELETE FROM `projet` WHERE `idProjet` = $idProjet and `idMembre` = $idUser ";
                    if($PDO->exec($request)){
                        header("Location:compte.php");
                    }else{
                                echo"<script>";
                                echo "alert('Data base error ')";
                                echo"</script>";
                    }
                }

                public function Modifier($idProjet,$nom,$description,$pays,$domaine,$adresse,$site){
                    include("connexion.php");
                    $request = " UPDATE `projet` SET `nom`='$nom',`description`='$description',`pays`='$pays',`adresse`='$adresse',`domaine`= '$domaine' ,`site`= '$site' WHERE `idProjet`=$idProjet ";
                    if($PDO->exec($request)){
                        header("Location:compte.php");
                    }else{
                                echo"<script>";
                                echo "alert('Data base error ')";
                                echo"</script>";
                    }
                }

                
                public function displayLien($idProjet)
                {
                    include("connexion.php");
                       $requete = "SELECT DISTINCT * from membre,projet where membre.idMembre = projet.idMembre and projet.idProjet = $idProjet ";
                       $reponse = $PDO->query($requete);
                       $resultat = $reponse->fetchAll();
                    return $resultat; 
                       
                }


                public function displayP($idEntrepreuneuse){
                   
                    include("connexion.php");
                    $request = "SELECT * FROM `projet` where  idMembre = $idEntrepreuneuse ";
                    $reponse = $PDO->query($request);
                    $resultat = $reponse->fetchAll();
                    return $resultat;  
    
                }

            }


?>