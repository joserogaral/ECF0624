<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="footer.css">
    <title>Footer</title>
</head>
<footer>
    <div class="foot"> 
        <div class="dic">
            <h6>GARAGE DES SAULES</h6>
            <h3>11 Rue de la Bourse, 31000 Toulouse <br> 0970350696</h3>
        </div>
        <?php foreach($listere as $librose){ ?>
            <div class="hor">
                <h6>HORAIRES D'OUVERTURE</h6>
                <h3> Lun - ven <?php echo $librose['hmo'] ?> - <?php echo $librose['hmf'] ?> │ <?php echo $librose['hao'] ?> - <?php echo $librose['haf'] ?></h3>
                <h3>Sam - Dim Fermé</h3>
            </div>
        <?php } ?>
        <div class="apropos">
            <nav>
                <a href="../Accueil/Accueil.php">Accueil</a>
                <a href="../Entretien/Entretien.php">Entretien</a>
                <a href="../Carrosserie/carrosserie.php">Carrosserie</a>
                <a href="../Voitures/voivoi.php">Voitures d'occasion</a>
                <a href="../../ADMIN/login/Login.php">Conextion</a>
            </nav>
        </div>
        <div class="reds">
            <a class="redsimg" src="https://www.facebook.com/">
                <img src="../../Imagenes/logo-facebook-noir.png" alt="">
            </a>
            <a class="redsimg" src="https://www.instagram.com/">
                <img src="../../Imagenes/Logo-Instagram-noir-1.png" alt="">
            </a> 
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>