<?php 
     	
     class Commentaire{
         private $idCom;
         private $idMembre;
         private $messagec;
         private $email;
         private $datec;
         private $nom;


         public function __construct( $idCom ='',	$idMembre='',	$messagec='',	$email='',	$datec='',	$nom=''	 ){
            $this->idCom = $idCom;
            $this->idMembre = $idMembre;
            $this->messagec = $messagec;
            $this->email = $email;
            $this->datec = $datec;
            $this->nom = $nom;
         }


         public function newMessage( $idMembre='',	$messagec,	$email='', $nom=''	){

            include("connexion.php");

            if( $idMembre == '' ){

               $request =" INSERT INTO `commentaire`( `messagec`, `email`,  `nom`) values ( '$messagec',	'$email', '$nom')";

            }else{

                $request ="  INSERT INTO `commentaire`(`idMembre`, `messagec`) values ( $idMembre,'$messagec')";
               
            }

                if($PDO->exec($request)){
                    header("Location:index.php");
                }else{
                            echo"<script>";
                            echo "alert('Data base error ')";
                            echo"</script>";
                }

         }


         public function display(){
            include("connexion.php");
            $request = "select * from commentaire ORDER by datec desc,idCom desc ";
            $reponse = $PDO->query($request);
            $resultat = $reponse->fetchAll();
         return $resultat; 
         }
     }

?>