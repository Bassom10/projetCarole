<?php
       
                try{
                    $PDO = new PDO('mysql:host=localhost;dbname=women_bd','root','');
                }catch(PDOException $e){
                    echo"Connexion impossible";
                }
            

?>