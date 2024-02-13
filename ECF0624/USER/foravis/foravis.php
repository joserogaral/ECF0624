<?php
include('../../ADMIN/bd/bd.php');

$msg=(isset($_POST['msg']))?$_POST['msg']:"";
$nom=(isset($_POST['nom']))?$_POST['nom']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$date= date("d/m/y");

switch($accion){
    case "Envoyer":
        $sentenciaSQL= $conexion->prepare("INSERT INTO avis (fech, pren, comm) VALUES (:fech, :pren, :comm);");
        $sentenciaSQL->bindParam(':fech',$date);
        $sentenciaSQL->bindParam(':pren',$nom);
        $sentenciaSQL->bindParam(':comm',$msg);
        $sentenciaSQL->execute();
        header("Location:foravis.php");
        break;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="foravis.css">
</head>
<body>
    <div class="form">
        <div class="formtxt">
            <h1>Vos commentaires contribuent à améliorer nos services</h1>
            <h3>Laissez-nous un commentaire sur votre expérience chez Garage V. Parrot</h3>
        </div>
        <div class="form1">
        <form action="" method="post">
                <div class="ttt">
                    <div class="lttl">
                        <strong><h2>Racontez-nous votre expérience</h2></strong>
                        <div>
                            <label for="">Nom</label><br><br>
                            <input type="text" required class="lbl"  name="nom" id="nom" placeholder="Nom">
                        </div>
                     </div>
                    <div class="elo">
                        <div>
                            <label for="">Messagge</label> <br><br>
                            <input type="text" required class="lbl" name="msg" id="msg" placeholder="message">
                        </div>
                     </div>
                 </div>
                    
                <div class="bbb">
                    <div  role="group" aria-label="">
                        <button type="submit" value="Envoyer" name="accion">Envoyer</button>
                    </div>
                </div>
        </form>
        </div>
    </div>
</body>
</html>