
<nav class="navbar navbar-expand-lg navbar-light fixed-top">

    <div class="container">
             <a class="navbar-brand" href="#"> <span class="-brand"> WOMEN SOLIDARITY </span> </a>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">

                            

                                <li class="nav-item">
                                        <a class="nav-link" href="index.php"> <span class="nav-a">Home </span>
                                        </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="entrepreneuriat.php"> <span class="nav-a">PROJETS </span>
                                        </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="conseil.php"> <span class="nav-a">Conseil </span>
                                        </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="a_propos.php"> <span class="nav-a">à propos </span>
                                        </a>
                                </li>

                                <?php if(!isset($_SESSION['idMembre'])):?>

                                    <li class="nav-item">
                                        <a class="nav-link" href="login.php"> <span class="nav-a">Se connecter </span>
                                            </a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="register.php"> <span class="nav-a">S'inscrire</span>
                                            </a>
                                    </li>
                                <?php else:?>
                                   
<li>  <a
          class="nav-link dropdown-toggle hidden-arrow"
          href="#"
          id="navbarDropdownMenuLink"
          role="button"
          data-toggle="dropdown"
          aria-expanded="false"
        >
          <i class="fas fa-bell"></i>
          <span class="badge rounded-pill badge-notification bg-danger">0</span>
        </a>
</li>
                                    <li class="nav-item">
                                         <div class="compte">

             <?php if(empty($_SESSION['photo'])): ?>

                <?php foreach($membre->displayM($_SESSION['idMembre']) as $e ) { ?>  

                                         <img src="uploads/<?= $e['photo'] ?>" class="photo_profil" alt="">
                <?php } ?>
            <?php else: ?>
                                         <img src="images/tof_defaul_commentaire.png" class="photo_profil" alt="">
             <?php endif; ?>
                                              <div class="compte-content">
                                                  <div class="affichage">
                                                      <h3> <a class=" nav-link" href="compte.php"> <span class="nav-a_">Profile</span>
                                                      <h3> <a class=" nav-link" href="logout.php"> <span class="nav-a_">Se déconnecter</span>
                                            </a> </h3>
                                                  </div>
                                              </div>
                                         </div>
                                       
                                    </li>
                                <?php endif;?>

                                

                    </ul>
            </div>
    </div>
  
</nav>