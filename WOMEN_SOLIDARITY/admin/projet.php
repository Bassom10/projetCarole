<?php 
   include("../classe/connexion.php");
   include("../classe/membre.php");
   include("../classe/actualite.php");
   include("../classe/projet.php");
   $projet = new projet();
   $actualite = new Actualite();
   $membre = new Membre();
   $membre::init_php_session();
       

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title> women solidarity  </title>
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" >    <title>WOMEN EMPOWERMENT</title>
</head>
<body>

    <?php 
                 require("head.php");
      ?>




<div class="container cont">

     

<table id="example" class="table table-striped table-bordered" style="width:100%">

  <thead>
      <tr>
          <th>Photo</th>
          <th>Nom</th>
          <th>Pays</th>
          <th>Descrption</th>
          <th>Adresse</th>
          <th>Domaine</th>
          <th>Site web</th>
          
      </tr>
  </thead>

  <tbody>

 <?php foreach( $projet->displayP($_GET['projet']) as $e){ ?>
              <tr>
                  <td><img src="../uploads/<?= $e['image']; ?>" class="photo_actualite" alt=""></td>
                  <td><?php echo $e['nom']; ?></td>
                  <td><?php echo $e['pays']; ?></td>
                  <td><?php echo $e['description']; ?></td>
                  <td><?php echo $e['adresse']; ?></td>
                  <td><?php echo $e['domaine']; ?></td>
                  <td><?php echo $e['site']; ?></td>
              </tr>
         
 <?php } ?> 

  </tbody>

  <tfoot>

      <tr>
          <th>Photo</th>
          <th>Nom</th>
          <th>Pays</th>
          <th>Descrption</th>
          <th>Adresse</th>
          <th>Domaine</th>
          <th>Site web</th>

      </tr>

  </tfoot>

</table>



















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
        </script>

</body>
</html>