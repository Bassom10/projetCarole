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
    <link rel="stylesheet" href="css/compte.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
  
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
<body >
    
<?php require("head.php");?>


<div class="container___">



    <div class="title">
                        <hr>
                        <h3>À propos</h3>
                        <hr>
                    </div>

                    <img src="images/Logo WOMEN SOLIDARITY (3).png" class="photo_profil_" alt="">
         
                    <div class="profil_infos_">

                  <h3>

                  <div
    id="collapseOne"
    class="collapse show pl-3"
    aria-labelledby="headingOne"
    data-parent="#accordionExample"
  ><br><br>
  WOMEN SOLIDARITY vise a une action élargie sur le continent africain .Dans les prochaines années, nous envisageront de crée des succursales a travers la planisphère pour que les femmes africaines puisse toujours avoir une structure pour les encadrer et les aider ou qu'elles ce trouvent.
W.S est initiative de plusieurs étudiants vivant en Tunisie ,il voit donc le jour en janvier 2018 sous le statut d'une association a BUTS NON LUCRATIFS .C'est un espace qui est dédier au femmes pouvant s'exprimer ,s'épanouir ,dans le but de :
promouvoir un réseaux d'amitié d'informer les femmes sur leur droit de soutien des femmes en précarité ou d'isolement l'intégration des femmes migrantes dans leur pays d'accueil l'épanouissement de la femme dans son milieu de vie et sans oublier l'élément majeur la promotion de l'entreprenariat féminin.
  </div>
                        </h3>
                        <h3></h3>
                        <h3></h3>
                        <h3></h3>

                    
                    
                    </div>

</div>

<div class="container">

<section class="text-center" >
          <h4 class="mb-5"><strong>Membres</strong></h4>

          <div class="row"> 

            <div class="col-lg-4 col-md-12 mb-4" style="margin-left:380px;">
           <!-- Card -->
<div class="card testimonial-card" style="max-width: 22rem;">

<!-- Background color -->
<div class="card-up aqua-gradient"></div>

<!-- Avatar -->
<div class="avatar mx-auto white">
  <img src="images/IMG-20200828-WA0015.jpg" class="rounded-circle"
    alt="woman avatar">
</div>

<!-- Content -->
<div class="card-body">
  <!-- Name -->
  <h4 class="card-title">OUBILEN BASSOM <br> Agnes Carolle</h4>
  <hr>
  <!-- Quotation -->
  <p><i class="fas fa-quote-left"></i> Présidente de WOMEN SOLIDARITY
  </p>
</div>

</div>
<!-- Card -->
            </div>


          </div>
        </section>
        <!--Section: Content-->

<section class="text-center">

          <div class="row"> 

            <div class="col-lg-4 col-md-12 mb-4">
           <!-- Card -->
<div class="card testimonial-card">

<!-- Background color -->
<div class="card-up indigo lighten-1"></div>

<!-- Avatar -->
<div class="avatar mx-auto white">
  <img src="images/WhatsApp Image 2020-09-08 at 21.52.14.jpeg" class="rounded-circle"
    alt="woman avatar">
</div>

<!-- Content -->
<div class="card-body">
  <!-- Name -->
  <h4 class="card-title">ABDOUL KARIM <br> Samira</h4>
  <hr>
  <!-- Quotation -->
  <p><i class="fas fa-quote-left"></i>Secrétaire Général
  </p>
</div>

</div>
<!-- Card -->
            </div>

            <div class="col-lg-4 col-md-12 mb-4">
           <!-- Card -->
<div class="card testimonial-card">

<!-- Background color -->
<div class="card-up indigo lighten-1"></div>

<!-- Avatar -->
<div class="avatar mx-auto white">
  <img src="images/WhatsApp Image 2020-09-08 at 21.10.16.jpeg" class="rounded-circle"
    alt="woman avatar">
</div>

<!-- Content -->
<div class="card-body">
  <!-- Name -->
  <h4 class="card-title"> NDZANA BIBANGA  <br> Lucrece </h4>
  <hr>
  <!-- Quotation -->
  <p><i class="fas fa-quote-left"></i> Chargé des projets
  </p>
</div>

</div>
<!-- Card -->
           </div>

           <div class="col-lg-4 col-md-12 mb-4">
           <!-- Card -->
<div class="card testimonial-card">

<!-- Background color -->
<div class="card-up indigo lighten-1"></div>

<!-- Avatar -->
<div class="avatar mx-auto white">
  <img src="images/WhatsApp Image 2020-09-08 at 21.01.29.jpeg" class="rounded-circle"
    alt="woman avatar">
</div>

<!-- Content -->
<div class="card-body">
  <!-- Name -->
  <h4 class="card-title">DEYAWE MAGNEM <br> Loraine Ines Marcelle</h4>
  <hr>
  <!-- Quotation -->
  <p><i class="fas fa-quote-left"></i> Chargé de communcation
  </p>
</div>

</div>
<!-- Card -->
           </div>

           <div class="col-lg-4 col-md-12 mb-4" style="margin-left:380px;">
           <!-- Card -->
<div class="card testimonial-card">

<!-- Background color -->
<div class="card-up indigo lighten-1"></div>

<!-- Avatar -->
<div class="avatar mx-auto white">
  <img src="images/WhatsApp Image 2020-09-08 at 21.07.39.jpeg" class="rounded-circle"
    alt="woman avatar">
</div>

<!-- Content -->
<div class="card-body">
  <!-- Name -->
  <h4 class="card-title"> Mabanga BIBANGA <br> LA blonde </h4>
  <hr>
  <!-- Quotation -->
  <p><i class="fas fa-quote-left"></i> Trésoriere
  </p>
</div>

</div>
<!-- Card -->
           </div>


          </div>
        </section>
        <!--Section: Content-->





</div>


<?php require("footer.php"); ?>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</body>
</html>