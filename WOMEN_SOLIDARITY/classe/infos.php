<?php 
    

     class Infos{

         private $idInfos;
         private $messageI;
         private $idMembre;
         private $datej;
    
         public function __construct( $idInfos='',$idMembre='',$messageI ='',$datej = ''){
                   
              $this->idInfos = $idInfos;
              $this->idMembre = $idMembre;
              $this->messageI = $messageI;
              $this->$datej = $datej; 

         }




         public function newInfos($idMembre,$messageI){

          include("connexion.php");

              $request =" INSERT INTO `infos`(`idMembre`, `messageI`) VALUES ($idMembre,'$messageI') ";

              if($PDO->exec($request)){

                  header("Location:infos.php");

              }else{
                          echo"<script>";
                          echo "alert('Data base error ')";
                          echo"</script>";
              }
         }

               public function delete($infos){

                    include("connexion.php");

                    $request = "delete from infos where idInfos = '$infos'";
                    if($PDO->exec($request)){
                        header("Location:infos.php");
                    }else{
                                echo"<script>";
                                echo "alert('Data base error ')";
                                echo"</script>";
                    }

                }






         public function listeMembre()
                {
                    include("connexion.php");
                       $requete = "SELECT * from infos";
                       $reponse = $PDO->query($requete);
                       $resultat = $reponse->fetchAll();
                    return $resultat; 
                       
                }


                public function afficher()
                {
                    include("connexion.php");
                       $requete = "SELECT * from infos where idInfos = (select MAX(idInfos) from infos ) ";
                       $reponse = $PDO->query($requete);
                       $resultat = $reponse->fetchAll();
                    return $resultat; 
                       
                }

                public function alerte()
                {
                    include("connexion.php");
                       $requete = "SELECT count(*) from infos where statut = 1 ";
                       $reponse = $PDO->query($requete);
                       $resultat = $reponse->fetchAll();
                    return $resultat; 
                       
                }
      


     }


?>