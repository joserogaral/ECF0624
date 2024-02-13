<?php
include('../bd/bd.php');

$sentenciaSQL=$conexion->prepare("SELECT * FROM messages");
$sentenciaSQL->execute();
$lister=$sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);

$ID=(isset($_POST['ID']))?$_POST['ID']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

switch($accion){        
                     
    case "Supprimer":
       $sentenciaSQL= $conexion->prepare("DELETE FROM messages WHERE ID=:ID");
       $sentenciaSQL->bindParam(':ID',$ID);
       $sentenciaSQL->execute();
       header("Location:messages.php");
       break;
}
?>
<?php  include('../heyfooa/heya.php'); ?>

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Messages.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Messages</title>
</head>
<body>
    <div class="titu">
        <h3>M E S S A G E S</h3>
    </div>
    <div class="contt">
        <div class="voilist">
            <table class="table">
                <thead>
                    <tr>
                        <th>Date</th>
                        <th>Message</th>
                        <th>Prénom</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>ACCION</th>
                    </tr>
                </thead>
 
                <tbody>
                <?php foreach($lister as $libros){ ?>
                    <tr>
                        <td><?php echo $libros['date'] ?></td>
                        <td><?php echo $libros['mesage'] ?></td>
                        <td><?php echo $libros['prenom'] ?></td>
                        <td><?php echo $libros['email'] ?></td>
                        <td><?php echo $libros['telephone'] ?></td>
                        
                        <td>
                            <form class="orl" method="post">
                                <input type="hidden" name="ID" id="ID" value="<?php echo $libros['ID']?>"/>
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