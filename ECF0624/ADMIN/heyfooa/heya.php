<?php
session_start();

if(!isset($_SESSION['valid'])) {
  header("Location:../login/Login.php");

}else{
  if($_SESSION['valid']=="ok"){

    $nouse=$_SESSION["present"];
    $noupm=$_SESSION["ccbda"];
    
  }
}
?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="heya.css">
</head>
<header>
    <div class="cab">
        <div class="ccc">
            <a href="../Accueil/Accueil.html">
                <img src="../../Imagenes/Logos/VPARROT.png" alt="Logo">
            </a>
        </div>
        <div class="cab1">
                <nav class="list">
                    <a href="../Voituresa/Voitures.php">VOITURES</a>
                    <?php if ($noupm == '1') {?>
                    <a href="../Personnela/Personnela.php">PERSONNEL</a>
                    <?php } ?>
                    <a href="../Messages/Messages.php">MESSAGES</a> 
                    <?php if ($noupm == '1') {?>
                    <a href="../infosite/infosit.php">INFO DU SITE</a>
                    <?php } ?>
                    <a href="../Avis/Avis.php">AVIS DU SITE</a>
                    <a href="../Deconexion/Deconecxion.php">DECONNEXION</a>               
                </nav>
        </div>
    </div>
</header>
</html>