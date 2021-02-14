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
    <title>WOMEN solidarity </title>
</head>
<body style="background-image: url(images/pagne.jpg);">
    
        <?php 
           require("head.php");
        ?>

                 <div class="container_" style="background-image: url(images/Fall.png);background-repeat: repeat;">
                          
                                 

                            <div class="msg">

                                 <h5 class="title_">    PROJETS</h5>
                                 <div class="list">
<?php foreach($projet->display() as $e) {?>
                                

                                        <table class="entrepreneuse">
                                            <tr>
                                                <td rowspan="8"><img src="uploads/<?= $e['image'] ?>" class="photo_entrepreneuriat" alt=""></td>
                                                <td>Nom : <?php echo $e['nom']; ?></td>
                                                
                                            </tr>
                                            <tr>
                                                <td>Pays : <?php echo $e['pays']; ?> </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                         Adresse : <?php echo $e['adresse']; ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
Description : <?php echo $e['description']; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                
                                                
                                                <?php foreach($projet->displayLien($e['idProjet'])as $t) {?> 
     <a href="<?= $t['facebook'] ?>"> <img src="images/icons8_facebook_48px.png" alt=""> </a>    
     <a href="<?= $t['instagram'] ?>"><img src="images/icons8_instagram_48px.png" alt=""></a>       
     <a href="<?= $t['youtube'] ?>"> <img src="images/icons8_play_button_48px.png" alt=""></a>  <br>
     <a href="<?= $t['site'] ?>"><?php print_r($t['site']); ?> </a>     
<?php }?>

                                                </td>
                                            </tr>
                                        </table>
                                        <?php }?>
                                 </div>


                            </div>
                            <div class="footer">
                            </div>       
                 </div>                        

        
       
  







<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>