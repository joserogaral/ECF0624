<?php
include('../bd/bd.php');

$sentenciaSQLx=$conexion->prepare("SELECT * FROM avis");
$sentenciaSQLx->execute();
$listerine=$sentenciaSQLx->fetchALL(PDO::FETCH_ASSOC);

$ID=(isset($_POST['ID']))?$_POST['ID']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

switch($accion){        
                     
    case "Supprimer":
       $sentenciaSQLx= $conexion->prepare("DELETE FROM avis WHERE ID=:ID");
       $sentenciaSQLx->bindParam(':ID',$ID);
       $sentenciaSQLx->execute();
       header("Location:Avis.php");
       break;
}
?>

<?php  include('../heyfooa/heya.php'); ?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Avis.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>AVIS DU SITE</title>
</head>
<body>
    <div class="titu">
        <h3>Avis du site</h3>
    </div>
    <div class="contt">
        <div class="voilist">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Prénom</th>
                        <th>Avis</th>
                        <th>ACCION</th>
                    </tr>
                </thead>
 
                <tbody>
                <?php foreach($listerine as $libreta){ ?>
                    <tr>
                        <td><?php echo $libreta['fech'] ?></td>
                        <td><?php echo $libreta['pren'] ?></td>
                        <td><?php echo $libreta['comm'] ?></td>
                        
                        <td>
                            <form class="orl" method="post">
                                <input type="hidden" name="ID" id="ID" value="<?php echo $libreta['ID']?>"/>
                                <input type="submit" name="accion" value="Supprimer" class="btn btn-danger"/>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>