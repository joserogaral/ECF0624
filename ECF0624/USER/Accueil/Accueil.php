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

$sentenciaSQL=$conexion->prepare("SELECT * FROM hoyca");
$sentenciaSQL->execute();
$listere=$sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);

$sentenciaSQLft=$conexion->prepare("SELECT * FROM avis");
$sentenciaSQLft->execute();
$listereft=$sentenciaSQLft->fetchALL(PDO::FETCH_ASSOC);

switch($accion){
    case "Envoyer":
        $sentenciaSQL= $conexion->prepare("INSERT INTO messages (date, mesage, prenom, email, telephone) VALUES (:date, :mesage, :prenom, :email, :telephone);");
        $sentenciaSQL->bindParam(':prenom',$nompre);
        $sentenciaSQL->bindParam(':telephone',$telephone);
        $sentenciaSQL->bindParam(':email',$email);
        $sentenciaSQL->bindParam(':mesage',$msg);
        $sentenciaSQL->bindParam(':date',$date);
        $sentenciaSQL->execute();
        header("Location:Accueil.php");
        break;
}

?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Accueil.css">
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
        <!--BODY 2-->


    <div class="titi">
        <strong><h1>Vos commentaires sont importants pour nous.</h1></strong>
    </div>
    <div class="despii">
<?php foreach($listereft as $libroseft){ ?>
        <div class="des12">
            <h1>"<?php echo $libroseft['pren'] ?>"</h1>
            <p><?php echo $libroseft['comm'] ?></p>
        </div>
<?php } ?>        
    </div>         


    <!--BODY 3-->
    <div class="des">
        <div class="des1">
            <h1>Garage auto - Toulouse</h1>
            <p>À Toulouse, le garage des SAULES met à votre service des spécialistes en mécanique et en carrosserie automobile.</p>
        </div>
        <div class="des2">
            <h1>Nous serons ravis de vous ouvrir les portes de notre garage</h1>
        </div>
    </div>




    
<?php foreach($listere as $librose){ ?>
    <!--BODY 4--> 
        <div class="cont">
            <div class="it">
                <div class="it1">
                    <strong><h2><?php echo $librose['sut'] ?></h2></strong>
                    <p><?php echo $librose['sui'] ?></p>
                    <h3>Nous prenons soin de votre voiture, comme si c’était la nôtre !</h3>
                </div>
                <div class="it2">
                    <img src="../../Imagenes/reparacion.jpeg" alt="">
                </div>
            </div>
            <div class="back2">
                <strong><h1>Vous avez aimé nos services ?<br><br>Aidez-nous à améliorer nos services avec vos commentaires et conseils.</h1></strong>
                <a href="../foravis/foravis.php" target="_blank"><button>Laisser un avis</button></a>
            </div>
        </div>
        <!--BODY 5-->
        <div class="pv">
            <div class="pv1">
                <div class="pvimg">
                    <img src="../../Imagenes/eco.jpeg" alt="">
                </div>
                <div class="pvtxt">
                    <h1><?php echo $librose['sdt'] ?></h1>
                    <p><?php echo $librose['sdi'] ?></p>
                    <h3>Un ÉCO-GARAGE non loin du quartier des Carmes et de la cité Empalot</h3>
                </div>
            </div>
            <div class="pv2">
                <div class="pvimg">
                    <img src="../../Imagenes/mantenimiento.jpeg" alt="">
                </div>
                <div class="pvtxt">
                    <h1><?php echo $librose['stt'] ?></h1>
                    <p><?php echo $librose['sti'] ?></p>
                    <h3>Plaisance Auto CLEMENT...</h3>
                    <a href="../Contact/Contact.php"><button>Découvrez notre 2ème joyau</button></a>
                </div>
            </div>
        </div>
<?php } ?>
    <!--BODY 6-->
    <div class="vmv"> 
        <div class="titu">
            <strong><h1>Nous nous distinguons pour</h1></strong>
        </div>
        
        <div class="vmv1">
            <div class="vmvtxt">
                <h3>Notre expérience</h3>
                <h2>1</h2>
                <p>Nous avons 20 ans d’expérience dans la mécanique et la carrosserie automobile.</p>
            </div>
            <div class="vmvtxt">
                <h3>Notre professionnalisme</h3>
                <h2>2</h2>
                <p>Nous mettons une équipe de mécaniciens et de carrossiers professionnels à votre service.</p>
            </div>
            <div class="vmvtxt">
                <h3>Notre transparence</h3>
                <h2>3</h2>
                <p>Le développement d’une relation de confiance avec nos clients est au cœur de notre stratégie.</p>
            </div>
            <div class="vmvtxt">
                <h3>La qualité de nos produits et de nos services</h3>
                <h2>4</h2>
                <p>La qualité est pour nous une autre priorité, pour satisfaire au mieux notre clientèle.</p>
            </div>
        </div>
    </div>
    <!--BODY 7-->
    <div class="cm">
        <div class="cm1">
            <strong><h2>Pour toute demande d’informations supplémentaires, contactez-nous via ce formulaire.</h2></strong>
            <h5>Nous mettons à votre disposition un véhicule de prêt durant la durée d’immobilisation de votre voiture.</h5>
            <div class="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5901.170608114208!2d1.4419262350960527!3d43.599954164415294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12aebbb2f4bd4dd7%3A0x8648c41bbf5d98da!2sCafe%20Bong!5e0!3m2!1ses!2sfr!4v1701254077501!5m2!1ses!2sfr" width="500" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <strong><h2>Visitez notre garage</h2></strong>
        </div>
        <div class="form">
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
        </div>
    </div>
    <script src="Accueil.js"></script>
</body>

</html>

<?php include('../heyfo/footer.php')?> 