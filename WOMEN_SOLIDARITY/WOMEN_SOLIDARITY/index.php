<?php 

    include("classe/connexion.php");
    include("classe/membre.php");
    include("classe/commentaire.php");
    $membre = new Membre();
    $commentaire = new Commentaire();
    
    include("classe/actualite.php");
    $actualite = new Actualite();
    $membre::init_php_session();


    if(isset($_POST['message']) && isset($_SESSION['idMembre'])){
        $msg = $_POST['message'] ;
        $id = $_SESSION['idMembre'] ;

        $commentaire->newMessage( $id,	$msg	);
        
    }

    if(isset($_POST['message']) && isset($_POST['nom']) && isset($_POST['email']) ){
        $msg = $_POST['message'] ;
        $nom = $_POST['nom'] ;
        $email = $_POST['email'] ;

        $commentaire->newMessage( '',$msg,$email,$nom);
        
    }

    setlocale(LC_TIME, 'fra_fra');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=*, initial-scale=1.0">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title> WOMEN SOLIDARITY </title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/compte.css">



    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <!-- Custom styles -->
    <style></style>

</head>
<body>
 


 <!--Main Navigation-->
 <header>
      <style>
        /* Carousel styling */
        #introCarousel,
        .carousel-inner,
        .carousel-item,
        .carousel-item.active {
          height: 100vh;
        }

        .carousel-item:nth-child(1) {
          background-image: url('images/DSC_1507.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(2) {
          background-image: url('images/DSC_1692.jpg');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }
        .carousel-item:nth-child(3) {
          background-image: url('images/Logo WOMEN SOLIDARITY (3) - Copie.png');
          background-repeat: no-repeat;
          background-size: cover;
          background-position: center center;
        }

        /* Height for devices larger than 576px */
        @media (min-width: 992px) {
          #introCarousel {
            margin-top: -58.59px;
          }
          #introCarousel,
          .carousel-inner,
          .carousel-item,
          .carousel-item.active {
            height: 50vh;
          }
        }

        .navbar .nav-link {
          color: #fff !important;
        }
      </style>

<?php require("head.php");?>

      <!-- Carousel wrapper -->
      <div id="introCarousel" class="carousel slide carousel-fade shadow-2-strong" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#introCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#introCarousel" data-slide-to="1"></li>
          <li data-target="#introCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Inner -->
        <div class="carousel-inner">
          <!-- Single item -->
          <div class="carousel-item active">
            
          </div>

          <!-- Single item -->
          <div class="carousel-item">
           
          </div>

          <!-- Single item -->
          <div class="carousel-item">
           
          </div>
        </div>
        <!-- Inner -->

        <!-- Controls -->
        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Carousel wrapper -->
    </header>
    <!--Main Navigation-->

                                        




    <main class="mt-5">
<div class="container">

   
  <!--Section: Content-->
  <section>
          <div class="row">
            <div class="col-md-6 gx-5 mb-4">
              <div class="bg-image hover-overlay ripple shadow-2-strong" data-ripple-color="light">
                <img src="images/DSC_1678.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
              <h4><strong>WOMEN SOLIDARITY</strong></h4>
              <p class="text-muted">
                        c'est une organisation non gouvernementale, ayant pour vocation de promouvoir l'épanouissement des femmes africains. l'association interviens dans le domaines de la santé ,de la vie sociale, l'entreprenariat, l'intégration social, la migration, l'éducation.
            </p>
            </div>
          </div>
        </section>
        <!--Section: Content-->


<hr class="my-5" />
    
<section class="text-center">

          <h4 class="mb-5"><strong> ENTREPRENEUSES </strong></h4>

          <div class="row">

            <div class="col-lg-4 col-md-6 mb-4">
                    <!-- Card -->
            <div class="card">

            <!-- Card image -->
            <div class="view overlay">
              <img class="card-img-top" src="images/photo neila.jpg"
              style="height:360px;"
                alt="Card image cap">
             
            </div>

            <!-- Card content -->
            <div class="card-body">

              <!-- Title -->
              <h4 class="card-title">NEILA BENZINA <br>   <h6> « Présidente Business & Decision Middle East & Africa »</h6></h4>
              <!-- Text -->
              <p class="card-text">Ne pas essayer de ressembler à nos pairs masculins ! Nous avons nos
               propres spécificités et qualités.
               Libérez votre énergie, sentez- vous capables d’atteindre vos objectifs , la capacité est en Vous. Si vous êtes convaincues, vous êtes convaincantes
               
               </p>
<!-- Facebook -->
<a class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/neila.benzinalatrous" role="button"
  ><i class="fab fa-facebook-f"></i
></a>

<!-- Twitter -->
<a class="btn btn-primary" style="background-color: #55acee;" href="https://twitter.com/Neilabenzina" role="button"
  ><i class="fab fa-twitter"></i
></a>
            </div>

            </div>
            <!-- Card -->
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
                    <!-- Card -->
<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src="images/photo adelaine .jpg"
  style="height:360px;"
    alt="Card image cap">
  
</div>

<!-- Card content -->
<div class="card-body">

  <!-- Title -->
  <h4 class="card-title">Adelaïde Ngalle Miano <br> <h6><< Présidente-Fondatrice de la Cameroon Women Business Leaders >> </h6> </h4>
  <!-- Text -->
  <p class="card-text">Je me considère d’abord comme une défenseure

de l’initiative entrepreneuriale féminine en général et en particulier de l’insertion économique de la jeune femme diplômée.</p>

<!-- Facebook -->
<a class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/ngallemianoadelaide" role="button"
  ><i class="fab fa-facebook-f"></i
></a>

<!-- Twitter -->
<a class="btn btn-primary" style="background-color: #55acee;" href="#" role="button"
  ><i class="fab fa-twitter"></i
></a>
</div>

</div>
<!-- Card -->
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                    <!-- Card -->
<div class="card">

<!-- Card image -->
<div class="view overlay">
  <img class="card-img-top" src="images/260px-Miriem_Bensalah-Chaqroun_(cropped).jpg"  style="height:360px;"
    alt="Card image cap">

</div>

<!-- Card content -->
<div class="card-body">

  <!-- Title -->
  <h4 class="card-title">Miriem Bensalah-Chaqroun <br> <h6>  <<  Pr de la Confédération générale des entreprises du Maroc >> </h6></h4>
  <!-- Text -->
  <p class="card-text">Nous essayons de pousser la porte, nous échouons, nous essayons par la force, nous pouvons souffrir, puis nous découvrons qu'elle s'ouvre dans l'autre direction ′′ aussi les problèmes ′′
Essayez de le résoudre avec l'esprit et non par la violence..</p>

<!-- Facebook -->
<a class="btn btn-primary" style="background-color: #3b5998;" href="https://www.facebook.com/miriem.bensalahchaqroun.5" role="button"
  ><i class="fab fa-facebook-f"></i
></a>

<!-- Twitter -->
<a class="btn btn-primary" style="background-color: #55acee;" href="https://twitter.com/miriembensalah?lang=fr" role="button"
  ><i class="fab fa-twitter"></i
></a>

</div>

</div>
<!-- Card -->
            </div>

          </div>
    </section>
    <!--Section: Content-->


    <hr class="my-5" />

    

    <section class="text-center">
          <h4 class="mb-5"><strong>ACTUALITES</strong></h4>

          <div class="row">

          <?php foreach( $actualite->displayI( strftime('%Y-%m-%d')) as $e ){?>  

            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-ripple-color="light">
                  <img
                    src="uploads/<?=$e['photo']?>"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title"><?php echo $e['titre']; ?></h5>
                  <p class="card-text">
                  <?php echo $e['dateA']; ?>
                  </p>
                  <a href="<?= $e['lien']?>" class="btn btn-primary">Consulter l'article</a>
                </div>
              </div>
            </div>

          <?php } ?>   

          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

<!--Section: Content-->
<section class="mb-5">
  <h4 class="mb-5 text-center"><strong>  COMMENTAIRE  </strong></h4>

  <div class="row d-flex justify-content-center">
    <div class="col-md-6">
      <form method="post" action="index.php">
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <!-- Name input -->
          <?php if(!isset($_SESSION['idMembre'])):?>

  <div class="form-outline mb-4">
    <input type="text" name="nom" id="form4Example1" class="form-control" />
    <label class="form-label" for="form4Example1">Nom</label>
  </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" name="email" id="form3Example3" class="form-control" />
          <label class="form-label" for="form3Example3">Email </label>
        </div>

          <?php endif;?>   

       <!-- Message input -->
  <div class="form-outline mb-4">
    <textarea class="form-control" name="message" id="form4Example3" rows="4"></textarea>
    <label class="form-label" for="form4Example3">Message</label>
  </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">
          Sign up
        </button>

     
      </form>
    </div>
  </div>

  <div class="affiche_comm">

<table class="table_message" >

<?php foreach( $commentaire->display() as $e){?>  
    <tr>
        <td rowspan="2"><img src="images/<?= $e['photo_def'] ?>" alt="" class="tof_commentaire"></td>
        <td ><?php echo $e['nom']; ?></td>
        <td><?php echo $e['datec']; ?></td>
    </tr>
    <tr>
        <td colspan="2" class="msg"><?php echo $e['messagec']; ?></td>
    </tr>

<?php } ?>
</table>

</div>
<?php require("footer.php"); ?>

<!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>

</body>
</html>