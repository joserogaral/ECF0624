<?php 
include('../../ADMIN/bd/bd.php');
$sent=$conexion->prepare("SELECT * FROM garage");
$sent->execute();
$liste=$sent->fetchALL(PDO::FETCH_ASSOC); 

include('../../ADMIN/bd/bd.php');
$sentenciaSQL=$conexion->prepare("SELECT * FROM hoyca");
$sentenciaSQL->execute();
$listere=$sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);


?>



<?php include('../heyfo/header.php')?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>voivoi</title>
    <link rel="stylesheet" href="voivoi.css">
    </head>
<body> 

    <?php foreach($listere as $librose){ ?>
        <!--BODY 1-->
        <div class="pre">
            <div class="sec">
                <strong><h1>GARAGE <br> V. PARROT</h1></strong>
                <h2>Votre garage de confiance <br> despuis 15 ans</h2>
                <h3>11 Rue de la Bourse, 31000 Toulouse <br> 0970350696</h3>
                <h3> Lun - ven <?php echo $librose['hmo'] ?> - <?php echo $librose['hmf'] ?> │ <?php echo $librose['hao'] ?> - <?php echo $librose['haf'] ?></h3>
                <h3>Sam - Dim Fermé</h3>
                <a href="../Contact/Contact.php"><button class="bot1">Prendre RDV au Garage</button></a>
            </div> 
            <video autoplay muted loop class="previ">
                <source src="../../Video/DSC_2588_V1_0008.mp4" type="video/mp4">
            </video>
        </div>
    <?php } ?>

    <div class="tyt">
        <strong><h1>Parametres du filtre</h1></strong>
    </div>
    <div class="control">
            <div class="control1">
                <label for="precio" class="form-label">PRIX:</label>
                <input type="range" class="form-range" id="precio">  
            </div>
            <div class="control1">

                <label for="km" class="form-label">KILOMETRES:</label>
                <input type="range" class="form-range" id="km">
            </div>
    </div>



    <div class="container" class="col-md-12" id="cchhcc">
        <?php foreach($liste as $lib){ ?>
                <div class="shb">
                    <div class="marco">
                            <div class="imeg">
                                <img src="../../Imagenes/<?php echo $lib['photos'] ?>" alt="">
                            </div>
                            <hr class="linn">
                            <div class="conti">
                                <div class="linfo">
                                    <h1>SKU: <?php echo $lib['SKU'] ?></h1><br><hr class="linn">
                                    <h3>Marque: <?php echo $lib['marque'] ?></h3><br><hr class="linn">
                                    <h3>Kilometrage: <?php echo $lib['km'] ?></h3><br><hr class="linn">
                                    <h3>Prix: <?php echo $lib['prix'] ?></h3><br><hr class="linn">
                                    <a href="../Contact/Contact.php"><button>Plus de details..</button></a><br>
                                </div>
                            </div>
                    </div>
                </div>
        <?php } ?>
    </div>
    
</body>
</html> 

<?php include('../heyfo/footer.php')?> 