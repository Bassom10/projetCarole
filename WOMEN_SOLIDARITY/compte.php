<?php 
    include("classe/connexion.php");
    include("classe/membre.php");
    include("classe/commentaire.php");
    include("classe/projet.php");
    $membre = new Membre();
    $projet = new Projet();
    $commentaire = new Commentaire();
    include("classe/actualite.php");
    $actualite = new Actualite();
    $membre::init_php_session();

    if(!isset($_SESSION['idMembre'])){
            header("Location.login.php");
    }else{

      if(($_SESSION['idRole'] == 1)){
               header("Location:admin/index.php");
      }
    }


    if(isset($_GET['modifier']) && isset($_POST['update']) && isset($_POST['pays']) && isset($_POST['nomp']) && isset($_POST['descr']) && isset($_POST['adresse']) && isset($_POST['domaine']) && isset($_POST['site'])){

      $idProjet = $_GET['modifier'];
      $nom = $_POST['nomp_'];
      $description = $_POST['descr_'];
      $pays = $_POST['pays_'];
      $domaine = 	$_POST['domaine_'];
      $adresse = $_POST['adresse_'];
      $site = $_POST['site_'];

      $projet->Modifier($idProjet,$nom,$description,$pays,$domaine,$adresse,$site);

    }


    if(isset($_GET['delete'])){

      $id = $_SESSION['idMembre'];
      $val = $_GET['delete'];
      $projet->delete($id,$val);

    }


    if(isset($_FILES['tof']) && isset($_GET['idupload'])){
      $id = $_GET['idupload'];
      $img =time(). '_' .$_FILES['tof']['name'];
      $target = 'uploads/' . $img;
  
      if(move_uploaded_file( $_FILES['tof']['tmp_name'] ,$target ))
      {
          $projet->modifierPhoto($id,$img);    
      }
    }





    if(isset($_POST['pays']) && isset($_POST['nomp']) && isset($_POST['descr']) && isset($_POST['adresse']) && isset($_POST['domaine']) && isset($_POST['site'])){
   
      $id = $_SESSION['idMembre'];
      $nom = $_POST['nomp'];
      $description = $_POST['descr'];
      $pays = $_POST['pays'];
      $domaine = 	$_POST['domaine'];
      $adresse = $_POST['adresse'];
      $site = $_POST['site'];

      $projet->ajouter($id,$nom,$description,$pays,	$domaine,	$adresse,$site );
    }




    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['nat']) && isset($_POST['np']) && isset($_POST['formation']) && isset($_POST['lien_f']) && isset($_POST['lien_i']) && isset($_POST['lien_y'])){
      $id = $_SESSION['idMembre'];
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email =  $_POST['email'];
      $phone = $_POST['phone'];

      $formation = $_POST['formation'] ;
      $nat = $_POST['nat'] ;
      $num_p = $_POST['np'] ;

      $f = $_POST['lien_f'] ;
      $i = $_POST['lien_i'] ;
      $y = $_POST['lien_y'] ;

      $membre->modifierEntrepreneuse($id,$nom,$prenom, $phone,$email,$nat,$num_p,$formation,$f,$i,$y); 
        
    }

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['phone'])){
      $id = $_SESSION['idMembre'];
      $nom = $_POST['nom'];
      $prenom = $_POST['prenom'];
      $email =  $_POST['email'];
      $phone = $_POST['phone'];

      $membre->modifierMembre($id,$nom,$prenom, $phone,$email); 
        
    }

    if(isset($_POST['nat']) && isset($_POST['np']) && isset($_POST['formation']) && isset($_POST['lien_f']) && isset($_POST['lien_i']) && isset($_POST['lien_y']) ){
      $id = $_SESSION['idMembre'];
      $formation = $_POST['formation'] ;
      $nat = $_POST['nat'] ;
      $num_p = $_POST['np'] ;

      $f = $_POST['lien_f'] ;
      $i = $_POST['lien_i'] ;
      $y = $_POST['lien_y'] ;

      $membre->AjouterInfos($id,$nat,$num_p,$formation,$f,$i,$y); 
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/compte.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <title>WOMEN solidarity</title>
</head>
<body >
    
<?php require("head.php");?>


<div class="container___">


<?php foreach($membre->displayM($_SESSION['idMembre']) as $e){ ?>

    <img src="uploads/<?= $e['photo'] ?>" class="photo_profil_" alt="">
         
        <div class="profil_infos_">

            <h3>Nom : <?php echo $e['nom']; ?></h3>
            <h3>prénom : <?php echo $e['prenom']; ?></h3>
            <h3>Téléphone : <?php echo $e['telephone']; ?></h3>
            <h3>Email : <?php echo $e['email']; ?></h3>
            <?php if($e['entrepreneuse']== 1): ?>
              <h3>Formation : <?php echo $e['formation']; ?></h3>
            <h3>Nationalité : <?php echo $e['nationalite']; ?></h3>
            <h3>Numéro de Passport : <?php echo $e['numero_passeport']; ?></h3>
            <h3>

              <?php if(!empty($e['facebook']) ): ?>
                    <a href="<?= $e['facebook'] ?>"><img src="images/icons8_facebook_48px.png" alt=""></a>
              <?php endif; ?>
              <?php if(!empty($e['instagram']) ): ?>
                   <a href="<?= $e['instagram'] ?>"><img src="images/icons8_instagram_48px.png" alt=""></a>
              <?php endif; ?>
              <?php if(!empty($e['youtube']) ): ?>
                    <a href="<?= $e['youtube'] ?>"> <img src="images/icons8_play_button_48px.png" alt=""> </a>
              <?php endif; ?>
            
            
            </h3>

              <?php endif; ?>

           
          
        </div>

        <?php if($e['entrepreneuse'] == 0 ): ?>
              <?php endif; ?>

              <?php if($e['entrepreneuse'] == 0 ): ?>
                <h3 class="statut_membre">Membre</h3>
              <?php else: ?>
                <h3 class="statut_membre">Entrepreneuse</h3>
              <?php endif; ?>

        
        <div class="btn_profil">
                <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"> Modifier profil</button>  
             
                <a href="update_photo.php"> <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2"> Modifier photo</button> </a> 
                <?php if($e['entrepreneuse']== 1): ?>  
                  <?php if(empty($e['formation']) && empty($e['nationalite']) && empty($e['numero_passeport']) ): ?>
                    <button  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1"> Ajouter informations</button>  

                  <?php endif; ?>
      
                         <button  type="button" class="btn btn-primary " data-toggle="modal" data-target="#exampleModal3"> Nouveau projet</button> 

              <?php endif; ?>
        </div>
        <div class="title">
                        <hr>
                        <h3>PROJETS</h3>
                        <hr>
                    </div>
        <?php if($e['entrepreneuse']== 1): ?>   
<?php foreach($projet->listeMembre($_SESSION['idMembre']) as $e ){ ?>

              <div class="projet_">

                     <?php if(!empty($e['image'])):?>
                       <img src="uploads/<?= $e['image'] ?>" class="img_projet" alt="">
                     <?php else:?>
                        <form action="compte.php?idupload=<?= $e['idProjet'] ?>" method="post" class="form_update_img" enctype="multipart/form-data">
                            <label for="file" class="label-file">

                            <img src="images/upload.jpg" class="upload" alt=""><br> Choisir une photo pourl'article</label><br><br>

                            <input type="file"  name="tof" class="input-file" id="file" > <br>

                            <input type="submit" value="Modifier"class="button">

                        </form>
                     <?php endif; ?>
                     <div class="h4">

                        <h4>Nom : <?php echo $e['nom']; ?></h4>
                        <h4>Adresse : <?php echo $e['adresse']; ?></h4>
                        <h4>Pays : <?php echo $e['pays']; ?></h4>
                        <h4>Domaine : <?php echo $e['domaine']; ?></h4>
                        <h4>Description : <?php echo $e['description']; ?></h4>

                     </div> <br><br>
                     <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal5">Modifier </button>  
                     <a href="compte.php?delete=<?= $e['idProjet'] ?>" class="btn_projet_" > <button class="btn btn-outline-danger">Supprimer </button>  </a>

              </div>
              

<?php } ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel5" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel5">Modifier projet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<form action="compte.php?modifier=<?= $e['idProjet'] ?>" method="post">
          <div class="modal-body">

              <div class="md-form mb-4">

              <div class="form-outline">
              <label class="form-label" for="form1">PAYS</label>
                <input type="text"  name="pays_" value="<?= $e['pays'];?>" class="form-control validate"> <br>
                
              </div>
              <div class="form-outline">
              <label class="form-label" for="form1">Nom projet</label>
              <input type="text"  name="nomp_" value="<?= $e['nom'];?>" class="form-control validate"> <br>
                
              </div>
              <div class="form-outline">
              <label class="form-label" for="form1">Description</label>
              <input type="text"  name="descr_" value="<?= $e['description'];?>"class="form-control validate"> <br>
               
              </div>
              <div class="form-outline">
              <label class="form-label" for="form1">Adresse</label>
              <input type="text"  name="adresse_" value="<?= $e['adresse'];?>" class="form-control validate"> <br>
                
              </div>
              <div class="form-outline">
              <label class="form-label" for="form1">Domaine</label>
              <input type="text"  name="domaine_" value="<?= $e['domaine'];?>" class="form-control validate"><br>
               
              </div>
              <div class="form-outline">
              <label class="form-label" for="form1">Site web</label>
              <input type="text"  name="site_" value="<?= $e['site'];?>" class="form-control validate"><br>
                
              </div>





                           
              </div>

          </div>

          <div class="modal-footer">
            <input type="submit" class="btn btn-primary" name="update" value="Modifier">
          </div>
</form>
            


    </div>
  </div>
</div>
              <?php endif; ?>
     

        <?php }?>

</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MODIFIER PROFIL</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="compte.php" method="post" >

                    <div class="md-form mb-4">
                        <i class="fas fa-lock prefix grey-text"></i>
                        <?php foreach($membre->displayM($_SESSION['idMembre']) as $e){ ?>


                          <div class="form-outline">
                            <label class="form-label" for="form1">Nom</label>
                            <input type="text" id="defaultForm-email" name="nom" value="<?= $e['nom'];?>" class="form-control validate"> <br>
                          </div>
                          <div class="form-outline">
                            <label class="form-label" for="form1">Prénom</label>
                            <input type="text" id="defaultForm-email" name="prenom" value="<?= $e['prenom'];?>" class="form-control validate"> <br>
                          </div>
                          <div class="form-outline">
                            <label class="form-label" for="form1">Email</label>
                            <input type="email" id="defaultForm-email" name="email" value="<?= $e['email'];?>" class="form-control validate"> <br>
                          </div>
                          <div class="form-outline">
                            <label class="form-label" for="form1">Téléphone</label>
                            <input type="text" id="defaultForm-email" name="phone" value="<?= $e['telephone'];?>" class="form-control validate"> <br>
                          </div>







                              

                                <?php if($e['entrepreneuse'] == 1 ): ?>


                                  <div class="form-outline">
                                    <label class="form-label" for="form1">facebook</label>
                                    <input type="text" name="lien_f" value="<?= $e['facebook'];?>" class="form-control validate"><br>
                                  </div>
                                  <div class="form-outline">
                                    <label class="form-label" for="form1">instagram</label>
                                    <input type="text" name="lien_i" value="<?= $e['instagram'];?>" class="form-control validate"><br>
                                  </div>
                                  <div class="form-outline">
                                    <label class="form-label" for="form1">youtube</label>
                                    <input type="text" name="lien_y" value="<?= $e['youtube'];?>" class="form-control validate"><br>
                                  </div>
                                  <div class="form-outline">
                                    <label class="form-label" for="form1">Formation</label>
                                    <input type="text" name="formation" value="<?= $e['formation'];?>" class="form-control validate"><br>
                                  </div>
                                  <div class="form-outline">
                                    <label class="form-label" for="form1">Nationalité</label>
                                    <input type="text" name="nat" value="<?= $e['nationalite'];?>" class="form-control validate"><br>
                                  </div>
                                  <div class="form-outline">
                                    <label class="form-label" for="form1">Numéro passport</label>
                                    <input type="text" name="np" value="<?= $e['numero_passeport'];?>" class="form-control validate"><br>
                                  </div>
                                

                               <?php endif; ?>
                        <?php } ?>      
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" name="update" class="btn btn-primary">Modifier </button>
                    </div>
        </form>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ajouter informations</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="compte.php" method="post">
      <div class="modal-body">

                   <div class="md-form mb-5">
                      <input type="text" name="lien_f" placeholder=" Lien page facebook" class="form-control validate">
                    </div>

                    <div class="md-form mb-5">
                      <input type="text" name="lien_i" placeholder=" Lien page instagram" class="form-control validate">
                    </div>


                    <div class="md-form mb-5">
                      <input type="text" name="lien_y" placeholder=" Lien page youtube" class="form-control validate">
                    </div>


                    <div class="md-form mb-5">
                      <input type="text" name="formation" placeholder=" Formation" class="form-control validate">
                    </div>
            
                    <div class="md-form mb-5">
                      <input type="text" name="nat" placeholder=" Nationalité" class="form-control validate">
                    </div>

                    <div class="md-form mb-4">
                      <input type="text" name="np" placeholder="Numéro de passeport" class="form-control validate">
                    </div>
              </div>
            <div class="modal-footer">
              <button type="submit" name="infod" class="btn btn-primary">Enregistrer</button>
            </div>

      </form>
    </div>
  </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel3" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Nouveau projet</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
<form action="compte.php" method="post">
          <div class="modal-body">

              <div class="md-form mb-4">
                                <input type="text" id="defaultForm-email" name="pays" placeholder="pays" class="form-control validate"> <br>
                                <input type="text" id="defaultForm-email" name="nomp" placeholder="Nom" class="form-control validate"> <br>
                                <input type="text" id="defaultForm-email" name="descr" placeholder="description" class="form-control validate"> <br>
                                <input type="text" id="defaultForm-email" name="adresse" placeholder="Adresse" class="form-control validate"> <br>
                                <input type="text" id="defaultForm-email" name="domaine" placeholder="Domaine" class="form-control validate"><br>
                                <input type="text" id="defaultForm-email" name="site" placeholder="Site Web du projet" class="form-control validate"><br>

                           
              </div>

          </div>

          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>
</form>
            


    </div>
  </div>
</div>


<div class="footer">

        </div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>