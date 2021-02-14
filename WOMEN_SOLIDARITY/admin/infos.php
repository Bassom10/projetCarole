<?php 
    include("../classe/connexion.php");
    include("../classe/membre.php");
    include("../classe/actualite.php");
    include("../classe/infos.php");
    $actualite = new Actualite();
    $membre = new Membre();
    $infos = new Infos();
    $membre::init_php_session();

    if(!isset($_SESSION['idMembre'])){
      header("Location:../index.php");
    }
    
    if( isset($_POST['message']) ){
 
       if(!empty($_POST['message'] )){
          
              $msg = $_POST['message'];
              $id = $_SESSION['idMembre'];
              
              $infos->newInfos($id,$msg);

       }

    }

    if(isset($_GET['delete'])){
      $id = $_GET['delete'];
      $infos->delete($id);  
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
<div class="btn_new">


<button type="button"   type="button"
class="btn btn__ btn-primary"
data-toggle="modal"
data-target="#exampleModal" >
        Nouvelle infos
</button>


</div>
      <div class="container cont">

      

      <table id="example" class="table table-striped table-bordered" style="width:100%">

        <thead>
            <tr>
                <th>ID</th>
                <th>INFORMATIONS</th>
                <th>DATE</th>
                <th></th>

            </tr>
        </thead>

        <tbody>
    
       <?php foreach($infos->listeMembre() as $e){ ?>

                    <tr>
                        <td> <?php echo $e['idInfos'];  ?>       </td>
                        <td><?php echo $e['messageI'];  ?>      </td>
                        <td><?php echo $e['dateIj'];  ?>   </td>
                        <td><a href="infos.php?delete=<?= $e['idInfos']; ?>" > <img src="../images/delete.png" class="icon" alt=""></a></td>
                        
                    </tr>
               
       <?php } ?> 

        </tbody>

        <tfoot>

            <tr>
                <th>ID</th>
                <th>INFORMATIONS</th>
                <th>DATE</th>
                <th></th>

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


<!-- Modal -->
<div
  class="modal fade"
  id="exampleModal"
  tabindex="-1"
  aria-labelledby="exampleModalLabel"
  aria-hidden="true"
>
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">POSTER UNE INFORMATION</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="infos.php" method="post">

      <div class="modal-body">
        <div class="form-outline">
          <textarea name="message" class="form-control" id="textAreaExample" rows="4"></textarea>
          <label class="form-label" for="textAreaExample">Message</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary"> ENREGISTRER </button>
      </div>

      </form>
    </div>
  </div>
</div>

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