<?php 
    include("../classe/connexion.php");
    include("../classe/membre.php");
    include("../classe/actualite.php");
    $membre = new Membre();
    $actualite = new Actualite();
    $membre::init_php_session();
     
  if( isset($_POST['titre']) && isset($_POST['lien'])  && isset($_FILES['tof']) && $_POST['date']){

            $id = $_SESSION['idMembre'];
            $titre = $_POST['titre'];
            $lien = $_POST['lien'];
            $date = $_POST['date'];
            $img =time(). '_' .$_FILES['tof']['name'];
            $target = '../uploads/' . $img;

            if(move_uploaded_file( $_FILES['tof']['tmp_name'] ,$target ))
            {
                $actualite->newActualite($id,$titre,$lien,$img,$date);    
            }
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" >

    <title>WOMEN SOLIDARITY</title>
</head>
<body>
      <?php 
                 require("head.php");
      ?>

      <div class="container cont">

       
            <form action="form_article.php" method="post" class="form_actualite" enctype="multipart/form-data">
          <h3> Actualité </h3><br>

          <input type="text" name="titre" class=" input_text " placeholder="Titre" id="" required><br><br>

          <input type="text" name="lien" placeholder="Lien" class=" input_text " id="" required><br><br>

          <input type="date" name="date" placeholder="Date" class="input_text" id="" required><br><br>

          <label for="file" class="label-file">

          <img src="../images/upload.jpg" class="upload" alt=""> Choisir une photo pourl'article</label><br><br>

          <input type="file"  name="tof" class="input-file" id="file" > <br>

          <input type="submit" value="Enregistrer"class="button">
          
          <input type="reset" value="Actualiser"class="button">

            </form>



      </div>




        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>

        <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" ></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js" ></script>


        <script>
           $(document).ready(function() {
                $('#example').DataTable();
            } );


            $('#myModal').modal({
            keyboard: false
            })
        </script>

</body>
</html>