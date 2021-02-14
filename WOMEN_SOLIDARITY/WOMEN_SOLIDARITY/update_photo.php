<?php 
    include("classe/connexion.php");
    include("classe/membre.php");
    include("classe/actualite.php");
    $membre = new Membre();
    $actualite = new Actualite();
    $membre::init_php_session();
  
         
  if(isset($_FILES['tof'])){
    $id = $_SESSION['idMembre'];
    $img =time(). '_' .$_FILES['tof']['name'];
    $target = 'uploads/' . $img;

    if(move_uploaded_file( $_FILES['tof']['tmp_name'] ,$target ))
    {
        $membre->modifierPhoto($id,$img);    
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" >

    <title>WOMEN solidarity</title>
</head>
<body>
<?php require("head.php");?>

      <div class="container cont">

       
            <form action="update_photo.php" method="post" class="form_actualite" enctype="multipart/form-data">
                    <h3> Modifier votre photo de profil </h3><br>

                    <label for="file" class="label-file">

                    <img src="images/upload.jpg" class="upload" alt=""> Choisir une photo pourl'article</label><br><br>

                    <input type="file"  name="tof" class="input-file" id="file" > <br>

                    <input type="submit" value="Modifier"class="button">
                    
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