<?php include('../heyfo/header.php')?> 

<?php
include('../../ADMIN/bd/bd.php');
$ID=(isset($_POST['ID']))?$_POST['ID']:"";
$msg=(isset($_POST['msg']))?$_POST['msg']:"";
$nompre=(isset($_POST['nompre']))?$_POST['nompre']:"";
$email=(isset($_POST['email']))?$_POST['email']:"";
$telephone=(isset($_POST['telephone']))?$_POST['telephone']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$date= date("d/m/y");

switch($accion){
    case "Envoyer":
        $sentenciaSQL= $conexion->prepare("INSERT INTO messages (date, mesage, prenom, email, telephone) VALUES (:date, :mesage, :prenom, :email, :telephone);");
        $sentenciaSQL->bindParam(':prenom',$nompre);
        $sentenciaSQL->bindParam(':telephone',$telephone);
        $sentenciaSQL->bindParam(':email',$email);
        $sentenciaSQL->bindParam(':mesage',$msg);
        $sentenciaSQL->bindParam(':date',$date);
        $sentenciaSQL->execute();
        header("Location:Contact.php");
        break;
}

$sentenciaSQL=$conexion->prepare("SELECT * FROM hoyca");
$sentenciaSQL->execute();
$listere=$sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Contact.css">
    <title>Contact</title>
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
                <button class="bot1">Prendre RDV au Garage</button>
            </div>
            
            <video autoplay muted loop class="previ">
                <source src="../../Video/DSC_2588_V1_0008.mp4" type="video/mp4">
            </video>
        </div>
    <?php } ?>
    <!-- BODY 2 -->
    <div class="form">
        <div class="formtxt">
            <h1>Garage des Saules - Toulouse : contact</h1>
            <h3>Pour toute demande de renseignements ou suggestions sur notre site, n'hésitez pas à nous contacter, nous vous répondrons dans les plus brefs délais.</h3>
        </div>
        <div class="form1">
        <form action="" method="post">
                    <div class="ttt">
                        <div class="lttl">
                            <strong><h2>Visitez notre garage</h2></strong>
                            <div>
                                <label for="">Nom</label><br><br>
                                <input type="text" required class="lbl"  name="nompre" id="nompre" placeholder="Nom">
                            </div>
                            <div>
                                <label for="">Téléphone</label><br><br>
                                <input type="text" required class="lbl" name="telephone" id="telephone" placeholder="telephone">
                            </div>
                            <div>
                                <label for="">Email</label><br><br>
                                <input type="text" required class="lbl" name="email" id="email" placeholder="email">
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

        <div class="map">
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5901.170608114208!2d1.4419262350960527!3d43.599954164415294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebbb2f4bd4dd7%3A0x8648c41bbf5d98da!2sCafe%20Bong!5e0!3m2!1ses!2sfr!4v1701254077501!5m2!1ses!2sfr" width="650" height="750" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</body>
</html>

<?php include('../heyfo/footer.php')?> 