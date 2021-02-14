<?php 
    include("../classe/connexion.php");
    include("../classe/membre.php");
    include("../classe/actualite.php");
    $actualite = new Actualite();
    $membre = new Membre();
    $membre::init_php_session();
    
    if(isset($_GET['delete'])){
        $id = $_GET['delete'];
        $actualite->delete($id);  
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

    <title>women solidarity</title>
</head>
<body>
      <?php 
                 require("head.php");
      ?>
 <div class="btn_new">

<a href="form_article.php">
        
         <button type="button" class="btn__" data-toggle="modal" data-target="#exampleModal">
                 Nouvelle actualité
         </button>

</a>  

</div>
      <div class="container cont">

     

      <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>Photo</th>
                <th>Titre</th>
                <th>Lien</th>
                <th>Date</th>
                <th></th>

            </tr>
        </thead>

        <tbody>
    
       <?php foreach( $actualite->display() as $e){ ?>

                    <tr>
                        <td><img src="../uploads/<?= $e['photo']; ?>" class="photo_actualite" alt=""></td>
                        <td><?php echo $e['titre']; ?></td>
                        <td><?php echo $e['lien']; ?></td>
                        <td><?php echo $e['dateA']; ?></td>
                        <td><a href="actualite.php?delete=<?= $e['idActualite']; ?>" > <img src="../images/delete.png" class="icon" alt=""></a></td>
                       
                    </tr>
               
       <?php } ?> 

        </tbody>

        <tfoot>

            <tr>
                <th>Photo</th>
                <th>Titre</th>
                <th>Lien</th>
                <th>Date</th>
                <th></th

            </tr>

        </tfoot>

    </table>



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