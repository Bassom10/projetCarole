<?php 
        include("classe/connexion.php");
        include("classe/membre.php");
        $membre = new Membre();
        $membre::init_php_session();
        $membre::clean_php_session();
        header("Location:index.php");
?>