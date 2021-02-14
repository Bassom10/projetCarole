<?php 

            class Membre {
                
                private $idMembre;
                private $idRole;
                private $nom;
                private $prenom;
                private $telephone;
                private $photo;
                private $statut;
                private $email;
                private $datej;
                
                
                public function __construct($idMembre = '', $idRole= '',$nom= '',$prenom= '', $telephone= '',$email= '',$datej= '',$photo ='',$statut='' ){
                    
                    $this->idMembre = $idMembre;
                    $this->idRole= $idRole;
                    $this->nom=  $nom;
                    $this->prenom= $prenom;
                    $this->telephone=  $telephone;
                    $this->photo= $photo;
                    $this->statut= $statut;
                    $this->email= $email;
                    $this->datej= $datej; 

                }

                
                public function exist($email){
                    include("connexion.php");
                    $request = "select count(*) from membre where email = '$email'";
                    $response = $PDO->query($request);
                    $result = $response->fetchAll();
                    $val = 0;
                    foreach($result as $e){
                        $val = $e['count(*)'];
                    }

                    return $val;
                }


                public function Auth($email){
                    include("connexion.php");
                    $request = "select * from membre where email = '$email'";
                    $response = $PDO->query($request);
                    $result = $response->fetchAll();
                    return $result;
                }


                public function displayM($idMembre){
                    include("connexion.php");
                    $request = "SELECT * FROM `membre` where idMembre = $idMembre";
                    $reponse = $PDO->query($request);
                    $resultat = $reponse->fetchAll();
                    return $resultat; 
                }



                public function inscription($idRole,$nom, $telephone,$pass,$email,$prenom){

                    include("connexion.php");
                    if($this->exist($email) <> 1){
                        $request = "INSERT INTO `membre`(`idRole`, `nom`, `telephone`, `email`,pass,prenom) VALUES ($idRole,'$nom', '$telephone','$email','$pass','$prenom') ";
                        if($PDO->exec($request)){
                           return true;
                        }else{
                                    echo"<script>";
                                    echo "alert('Data base error ')";
                                    echo"</script>";
                        }
                    }else{
                        echo"<script>";
                        echo "alert('l email existe déjà')";
                        echo"</script>";
                    }
                   
                }

                public function AjouterInfos($idMembre,$nat,$num_p,$formation,$f,$i,$y){

                    include("connexion.php");
                        $request = "UPDATE `membre` SET nationalite = '$nat',`numero_passeport`= '$num_p',formation='$formation', `facebook`='$f',`instagram`='$i',`youtube`='$y' WHERE `idMembre`=$idMembre";
                        if($PDO->exec($request)){

                           header("Location:compte.php");
                           
                        }else{
                                    echo"<script>";
                                    echo "alert('Data base error ')";
                                    echo"</script>";
                        }
                   
                }

                public function modifierMembre($idMembre,$nom,$prenom, $telephone,$email){
                    include("connexion.php");
                    $request = " UPDATE `membre` SET `nom`='$nom',`prenom`='$prenom',`telephone`='$telephone',`email`='$email' WHERE `idMembre`='$idMembre'";
                    if($PDO->exec($request)){
                        header("Location:compte.php");
                    }else{
                                echo"<script>";
                                echo "alert('Modifier une valeur ')";
                                echo"</script>";
                    }
                }


                public function modifierEntrepreneuse($idMembre,$nom,$prenom, $telephone,$email,$nat,$num_p,$formation,$f,$i,$y) {
                    include("connexion.php");
                    $request = " UPDATE `membre` SET `nom`='$nom',`prenom`='$prenom',`telephone`='$telephone',`email`='$email' ,`nationalite`=$nat,`numero_passeport`=$num_p,`formation`=$formation,`facebook`=$f,`instagram`=$i,`youtube`=$y WHERE `idMembre`='$idMembre'";
                    if($PDO->exec($request)){
                        header("Location:compte.php");
                    }else{
                                echo"<script>";
                                echo "alert('Data base error ')";
                                echo"</script>";
                    }
                }

                public function modifierPhoto($idMembre,$photo){
                    include("connexion.php");
                    $request = " UPDATE `membre` SET `photo`= '$photo' WHERE `idMembre`=$idMembre";
                    if($PDO->exec($request)){
                        header("Location:compte.php");
                    }else{
                                echo"<script>";
                                echo "alert('Data base error ')";
                                echo"</script>";
                    }
                }




                public function listeMembre()
                {
                    include("connexion.php");
                       $requete = "SELECT * from membre, role where membre.idRole = role.idRole ";
                       $reponse = $PDO->query($requete);
                       $resultat = $reponse->fetchAll();
                    return $resultat; 
                       
                }

                public static function init_php_session()
                {
                        if(!session_id()){
                            session_start();
                            session_regenerate_id();
                            return true;
                        }
                        return false;
                }
       
                public static  function clean_php_session():void
                {
                        session_unset();
                        session_destroy();
                }


                public function update($val,$idMembre){

                    include("connexion.php");

                    $request = " update  membre set statutM = '$val' where idMembre = $idMembre  ";
                    if($PDO->exec($request)){
                        header("Location:index.php");
                    }else{
                                echo"<script>";
                                echo "alert('Data base error ')";
                                echo"</script>";
                    }

                }
                
                public function updateEntrepreneuse($val,$idMembre){

                    include("connexion.php");

                    $request = " update  membre set entrepreneuse = '$val' where idMembre = $idMembre  ";
                    if($PDO->exec($request)){
                        header("Location:index.php");
                    }else{
                                echo"<script>";
                                echo "alert('Data base error ')";
                                echo"</script>";
                    }

                }



         }
       
?>