<?php 

include("classe/connexion.php");
include("classe/membre.php");
include("classe/commentaire.php");
include("classe/projet.php");
include("classe/question.php");
$question = new Question();
$membre = new Membre();
$projet = new Projet();
$commentaire = new Commentaire();
include("classe/actualite.php");
$actualite = new Actualite();
$membre::init_php_session();
       
    if(isset($_GET['id'])){
        $_SESSION['idquestion'] = $_GET['id'];        
    }
    

    if(isset($_POST['avis'])){
        if(!empty($_POST['avis'])){
            $idQ = $_SESSION['idquestion'];
            $idM = $_SESSION['idMembre'];
            $avis = $_POST['avis'];
            $question->avis($idM, $idQ,$avis );
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/conseil.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <title> WOMEN SOLIDARITY </title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->

    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <style></style>
</head>
<body style="background-image: url(images/pagne.jpg);">
    
        <?php 
           require("head.php");
        ?>

                 <div class="container_" style="background: url(images/pexels-pixabay-356043.jpg);background-repeat: no-repeat;background:cover;">
                          
                                 

                            <div class="msg">
<?php foreach($question->displayQ($_SESSION['idquestion']) as $r ){ ?>
                                 <h5><?php echo $r['question']; ?></h5>
<?php } ?>

                                 <div class="list">
<?php foreach($question->displayA( $_SESSION['idquestion'] ) as $r ){ ?>

    <div class="avis_entre">

                <img src="uploads/<?= $r['photo'] ?>" class="logo_avis"    alt="">
                <p class="quest"> <?php echo $r['avis']; ?></p>
                <span class="date_"><?php echo $r['dateA']; ?></span>

    </div>
                                
   
<?php } ?>
                                
                                 </div>
                            </div>
                            <?php  if(isset($_SESSION['entrepreneuse'])):
                             if($_SESSION['entrepreneuse'] == 1): ?>
                                <div class="avis_conseil">
                                  <form action="avis.php" method="post">
                                      <textarea name="avis" id="" cols="50" rows="2" class="input_avis" placeholder="Message ... "></textarea>
                                      <input type="submit" class='btn_avis' value="ENREGISTRER">
                                  </form>
                                </div>
                        <?php endif;
                        
                              endif;
                        
                        ?>
                          
                          
                 </div>                        

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>