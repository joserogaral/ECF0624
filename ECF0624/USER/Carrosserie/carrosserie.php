<?php include('../heyfo/header.php')?> 

<?php
include('../../ADMIN/bd/bd.php');
$sentenciaSQL=$conexion->prepare("SELECT * FROM hoyca");
$sentenciaSQL->execute();
$listere=$sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);
?>

 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrosserie</title>
    <link rel="stylesheet" href="carrosserie.css">
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
                <a href="../Contact/Contact.php"><button class="bot1" src="../Contact/Contact.php">Prendre RDV au Garage</button></a>
            </div>
            
            <video autoplay muted loop class="previ">
                <source src="../../Video/DSC_2588_V1_0008.mp4" type="video/mp4">
            </video>
        </div>
    <?php } ?>
    <!--BODY 2-->
<section class="cuculkan">
    <div class="sucu">
        <div class="sucutxt">
            <h1>GARAGE DES SAULES - Toulouse : carrosserie</h1>
            <h3>Découvrez nos 2 centres sur Toulouse et sa Banlieue ( Plaisance du Touch )</h3>
        </div>
        <div class="sucu1">
            <h4>Centre Agrée Assurance : Plaisance du Touch.</h4>
            <img src="../../Imagenes/ubi.jpeg" alt="">
        </div>
        <div class="sucu1">
            <h4>Centre toutes Assurances (prise en charge) : Toulouse.</h4>
            <img src="../../Imagenes/ubi1.jpeg" alt="">
        </div>
    </div>
    <div class="rep">
        <div class="rep1">
            <h1>NOS PRESTATIONS</h1>
            <h2>ENTRETIEN RÉPARATION</h2>
            <ul class="lsi">
                <li>Prestations carrosserie rapide (rayures, petit impact...)</li>
                <li>Pare brise - Vitrage</li>
                <li>Climatisation</li>
                <li>Rénovation optique</li>
                <li>Réparation & rénovation plastique</li>
                <li>Réparation carrosserie suite à un accident</li>
            </ul>
            <img src="../../Imagenes/garage.jpeg" alt="">
        </div>
        <br><br>
        <hr class="linn">
    </div>
</section>
    
    <div class="reptxt">
        <div class="reptxt1">
            <h1>NOS FORFAITS TÔLERIE/PEINTURE</h1><br>
            <p>Vous avez des rayures,impacts, tôles légèrement froissées, nôtre forfait à 300 € ttc vous séduira ! Plus grave !!! Pas de problème, tôles froissées ou impacts imposant, nôtre second forfait à 390 € ttc est pour vous !

                Nos tarifs sont à confirmer lors de votre passage au garage, sans RDV, mais juste en nous téléphonant de votre venu ! Au-delà de ça, nous réparons aussi votre voiture si vous avez eu un accident avec suivit d'expert !
                N'hésitez pas à nous contacter pour tous renseignements.</p>
        </div>
        <div class="reptxt1">
            <h1>LE GARAGE DES SAULES DISPOSE AUSSI D’UN ATELIER DE CARROSSERIE ET DE PEINTURE.</h1><br>
            <p>Nous intervenons pour tous chocs ou accrochages suite à un accident. Nous nous chargeons de réparer vôtre voiture et procédons, si besoin, au changement des pièces de carrosserie défectueuses.

                Nous réalisons également les travaux de peinture nécessaires. Très professionnels et minutieux, nous veillons à vous fournir un travail soigné.</p>
        </div>
        <hr class="linn"> 
    </div>
    
    <div class="detl">
            <div class="detltxt">
                <h1>PARE BRISE/VITRAGE</h1>
                <p>Vitres cassées, brisées dû à un vandalisme, nous sommes en mesure de vous les remplacer rapidement !

                    Nous faisons aussi le remplacement de pare brise, de lunette arrière, vitre fixe et mobile sans aucune avance de vôtre part !!!</p>
            </div>
            <div class="detltxt">
                <h1>VITRES TEINTÉES</h1>
                <p>En mesure de la nouvelle loi applicable au 1ier janvier 2017 sur les véhicules avec les vitres teintées à l'avant, le contrôle technique vous sera refusé !

                    Afin de vous éviter une contre visite, nous vous proposons notre forfait dépose du film teinté à 30 € ttc par vitres.
                    Alors, n'hésitez pas et prenez RDV des à présent !!!</p>
            </div>
            <div class="detltxt">
                <strong><p>Vous ne la savez pas peut-être encore, mais en cas de sinistre , vous êtes en libre choix de choisir vôtre réparateur comme sité dans l'article ci-dessous! Alors n'hésitez pas à nous appeler pour toutes les modalitées.</p></strong>
            </div>
            <hr class="linn">
    </div>
    
    <div class="detl2">
        <div class="detl2txt">
            <p>Le décret précise que « la faculté pour l'assuré, prévue à l'article L. 211-5-1 du code des assurances, de choisir le réparateur professionnel auquel il souhaite recourir lui est rappelée de manière claire et objective dès le premier contact de l'assuré avec l'assureur en vue de la déclaration du sinistre.

                  Si le moyen de communication est oral, un écrit, notamment un message électronique ou un message textuel interpersonnel (SMS) spécifique, confirme dans les plus brefs délais cette information. »</p>
        </div>
        <div class="detl2img">
            <img src="../../Imagenes/atencion.jpeg" alt="">
        </div>
    </div>

    <div class="cont">
        <div class="back2">
            <strong><h1>Nous vous recevons dans notre garage dans une ambiance conviviale</h1></strong>
            <a href="../Contact/Contact.php"><button>Contactez-nous</button></a>
        </div>
    </div>
</body>
</html> 

<?php include('../heyfo/footer.php')?> 