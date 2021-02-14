<?php 

        class Question{
            private $idquestion;	
            private $idMembre;
            private $question;	
            private $dateQ;
            
            
            public function __construct($idquestion='',	$idMembre='',$question='',$dateQ=''){
                $this->idquestion = $idquestion;
                $this->idMembre = $idMembre;
                $this->question = $question;
                $this->dateQ = $dateQ;

            }


            public function poserQuestion(	$idMembre,$question ){

                include("connexion.php");
                $request = "INSERT INTO `question`( `idMembre`, `question`) values ('$idMembre','$question' ) ";
                if($PDO->exec($request)){
                    header("Location:conseil.php");
                }else{
                            echo"<script>";
                            echo "alert('Data base error ')";
                            echo"</script>";
                }

            }



            public function display(){
                include("connexion.php");
                $request = "SELECT `idquestion`, `idMembre`, `question`, `dateQ`  from question ORDER BY  idquestion desc , dateQ desc";
                $reponse = $PDO->query($request);
                $resultat = $reponse->fetchAll();
                return $resultat; 
            }

            public function displayQ($id){
                include("connexion.php");
                $request = "SELECT * from question where idquestion = $id ";
                $reponse = $PDO->query($request);
                $resultat = $reponse->fetchAll();
                return $resultat; 
            }


            public function displayA($id){
                include("connexion.php");
                $request = " SELECT * from avis,membre where avis.idquestion = $id and membre.idMembre = avis.idMembre  order by idAvis DESC , dateA DESC ";
                $reponse = $PDO->query($request);
                $resultat = $reponse->fetchAll();
                return $resultat; 
            }

            public function countAvis($idQuestion){
                include("connexion.php");
                $request = "select count(*) from avis where idquestion= $idQuestion ";
                $reponse = $PDO->query($request);
                $resultat = $reponse->fetchAll();
                foreach( $resultat as $e ){
                    $val = $e['count(*)'];
                }
                return $val; 
            }



            public function avis($idM,$idQ ,$avis ){
                include("connexion.php");
                $request = "INSERT INTO `avis`( `idMembre`, `idquestion`, `avis`) VALUES ('$idM','$idQ' ,'$avis')";
                if($PDO->exec($request)){
                    header("Location:avis.php");
                }else{
                            echo"<script>";
                            echo "alert('Data base error ')";
                            echo"</script>";
                }
            }




















        }

?>