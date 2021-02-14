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

if(isset($_POST['question'])){
   if(!empty($_POST['question']) ){
    if(isset($_SESSION['idMembre'])){
      $id = $_SESSION['idMembre'];
      $quest = $_POST['question'];
      $question->poserQuestion(	$id,$quest);
     }else{
       header("Location:login.php");
     }
   }else{
    echo"<script>";
    echo "alert('Renseigner le champs question ')";
    echo"</script>";
   }
      
}
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/conseil.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
    <title>WOMEN solidarity</title>
</head>
<body style="background-image: url(images/pagne.jpg);">

    
        <?php 
           require("head.php");
        ?>

                 <div class="container_" style="background: url(images/pexels-pixabay-356043.jpg);background-repeat: no-repeat;background:cover;">

                            <div class="msg">

                                 <h5>CONSEIL</h5>
                    <?php if(isset($_SESSION['entrepreneuse'])): ?>
                    
                        <?php if($_SESSION['entrepreneuse'] == 0): ?>
                                 <button type="button" class="btn btn-primary btn_" data-toggle="modal" data-target="#exampleModal">
                                    POSER UNE QUESTION
                                 </button>
                        <?php endif;?>

                    <?php endif;?>
                                
<br><br>
                                 <h6>Des entrepreneuses pour vous guider !</h6>
                                 <div class="list">
<?php  foreach($question->display() as $c){ ?>
                                          <div class="conseil">
                                                <p class="conseil_p"> <?php  echo $c['question']; ?> </p>

                                                <span class="conseil_btn">

<?php if(isset($_SESSION['entrepreneuse'])): ?>
                    
        <?php if($_SESSION['entrepreneuse'] == 1): ?>

               <a href="avis.php?id=<?= $c['idquestion'] ?>"><button  class="button">Avis</button></a>  
        <?php else:?> 
          <a href="avis.php?id=<?= $c['idquestion'] ?>"> <button  class="button">Consulter</button></a>
        <?php endif;?>
<?php else:?>           
  <a href="avis.php?id=<?= $c['idquestion'] ?>"><button  class="button">Consulter</button></a>
<?php endif;?>



                                                            <span class="conseil_number"><img src="images/icons8_messaging_48px_1.png" class="conseil_icon" alt=""> <?php echo $question->countAvis($c['idquestion']); ?> </span>
  
                                                </span>

                                          </div>    
<?php  } ?>
                                 </div>
                            </div>

                            <div class="footer">

</div>
                          
                 </div>                        

        

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Qusetion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="conseil.php" method="post">
          <div class="modal-body">
              <div class="md-form mb-4">
                <i class="fas fa-lock prefix grey-text"></i>
              
                <textarea name="question" id="" cols="63" placeholder="Question" rows="5" class="form-control validate"></textarea>
                
              </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Enregistrer</button>
          </div>
      </form>
    </div>
  </div>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>