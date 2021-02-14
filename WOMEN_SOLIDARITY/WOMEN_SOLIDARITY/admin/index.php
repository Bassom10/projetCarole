<?php 
    include("../classe/connexion.php");
    include("../classe/membre.php");
    $membre = new Membre();
    $membre::init_php_session();
     
    if(isset($_GET['on'])){
        $membre->update(0,$_GET['on']);
    }

    if(isset($_GET['off'])){
        $membre->update(1,$_GET['off']);
    }

    if(isset($_GET['onent'])){
        $membre->updateEntrepreneuse(0,$_GET['onent']);
    }

    if(isset($_GET['offent'])){
        $membre->updateEntrepreneuse(1,$_GET['offent']);
    }
       

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/table.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" >

    <title>WOMEN SOLIDARITY</title>
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
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>E-mail</th>
                <th>Projets</th>
                <th>Statut</th>
                <th>Entrepreneuse</th>

            </tr>
        </thead>
        <tbody>

        <?php foreach($membre->listeMembre() as $e){ ?>
            <tr>
                <td><img src="../uploads/<?php echo $e['photo']; ?>" class="photo_actualite_" alt=""></td>
                <td><?php echo $e['nom']; ?></td>
                <td><?php echo $e['prenom']; ?></td>
                <td><?php echo $e['telephone']; ?></td>
                <td><?php echo $e['email']; ?></td>
<?php if($e['entrepreneuse'] == 1 ):  ?>
                <td><a href='projet.php?projet=<?= $e['idMembre']?>' class="btn_projet">CONSULTER</a></td>
<?php else: ?>
    <td> </td>
                <?php endif; ?>
                <td>

        <?php if( $e['statutM'] == 1  ): ?>

           <a href='index.php?on=<?= $e['idMembre']?>'><img src="../images/off_on.png" class="icon" alt=""></a>

        <?php else:?>
            <a href='index.php?off=<?= $e['idMembre']?>'><img src="../images/on_off.png" class="icon" alt=""></a>
        <?php endif; ?>
                

                
                </td>

                <td>

<?php if( $e['entrepreneuse'] == 1  ): ?>

   <a href='index.php?onent=<?= $e['idMembre']?>'><img src="../images/1.png" class="icon" alt=""></a>

<?php else:?>
    <a href='index.php?offent=<?= $e['idMembre']?>'><img src="../images/nil.png" class="icon" alt=""></a>
<?php endif; ?>
        

        
        </td>
            </tr>
        <?php } ?>   
        </tbody>
        <tfoot>
            <tr>

                <th>Photo</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Téléphone</th>
                <th>E-mail</th>
                <th>Projets</th>
                <th>Statut</th>
                <th>Entrepreneuse</th>

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
        </script>

</body>
</html>