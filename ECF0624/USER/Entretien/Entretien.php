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
    <title>Entretien</title>
    <link rel="stylesheet" href="Entretien.css">
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
    <div class="sucu"> 
        <div class="sucutxt">
            <h1>Entretien</h1>
            <h3>ENTRETIEN RÉPARATION</h3>
            <ul class="lsi">
                <li>Allumage et gestion moteur</li>
                <li>Pneumatiques</li>
                <li>Entretien auto - Révision vidange</li>
                <li>Freinage - disques & plaquettes</li>
                <li>Distribution</li>
                <li>Diagnostic électronique</li>
                <li>Échappement</li>
                <li>Amortisseurs</li>
                <li>Embrayage</li>
                <li>Batterie - Alternateur - Démarreur</li>
                <li>Entretien et mécanique automobiles - Toulouse</li>
                <li>entretient, réparations, mécanique</li>
            </ul>
            <br>
            <p>Vous recherchez un mécanicien expérimenté et fiable ? Confiez votre voiture au GARAGE DES SAULES, des techniciens qualifiés prendront soin d’elle. Nous disposons du savoir-faire nécessaire pour effectuer la réparation et l’entretien de votre véhicule. <br> <br>
                Nous réalisons différentes prestations : vidange, pneumatiques, contrôle technique... Vous pouvez également nous confier votre voiture pour une expertise. Notre longue expérience nous permet de vous offrir les meilleurs services.</p>
        </div>
        <div class="sucu1">
            <img src="../../Imagenes/ubi.jpeg" alt="">
        </div>
        <br>
        <hr class="linn">
    </div>
    <div class="rep">
        <div class="rep1">
            <h1>NOUVEAUX TARIFS FORFAITS VIDANGE</h1>
            <h2>CLIMATISATION GAZ R134A</h2>
            <div class="rayas">
               <table> 
                    <tr>
                        <td>Huile semi-synthétique 10W40</td>
                        <td>79 € TTC</td>
                    </tr>
                    <tr>
                        <td>Huile 100% synthèse 5W40</td>
                        <td>87,60 € TTC</td>
                    </tr>
                    <tr>
                        <td>Huiles 5W30 C2/C3 avant 2015</td>
                        <td>110,11 € TTC</td>
                    </tr>
                    <tr>
                        <td>Huiles spécifiques entretien Longue durée <br> essence et diesel 30 000 km <br>
                            5w30, 5w20, 0w30, 0w20, 507.00, LL04</td>
                        <td>130 € TTC</td>
                    </tr>
                </table> 
            </div>
        </div>
        <div class="rep2">
            <h2>RÉVISION/VIDANGE</h2>
            <div class="rayas">
               <table>
                <tr>
                    <td>Huile semi-synthétique 10W40</td>
                    <td>79 € TTC</td>
                </tr>
                <tr>
                    <td>Huile 100% synthèse 5W40</td>
                    <td>87,60 € TTC</td>
                </tr>
                <tr>
                    <td>Huiles 5W30 C2/C3 avant 2015</td>
                    <td>110,11 € TTC</td>
                </tr>
                <tr>
                    <td>Huiles spécifiques entretien Longue durée <br> essence et diesel 30 000 km <br>
                        5w30, 5w20, 0w30, 0w20, 507.00, LL04</td>
                    <td>130 € TTC</td>
                </tr>
                </table> 
            </div>
            <div class="ienjg">
                <p>Tous les prix comprennent jusqu'à 5L huile, la main d'oeuvre, le filtre à huile, les niveaux, pression pneus, et plusieurs points de contrôle d'éléments d'usure.</p>
            </div>
        </div>
        <hr class="linn">
    </div>

    <div class="reptxt">
        <div class="reptabl">
            <h2>CONTRÔLE TECHNIQUE</h2>
            <h3>Tarifs (T.T.C.tva 20%)</h3>
            <div class="rayas">
                <table>  
                <tr>
                    <td>Contrôle technique réglementaire VP</td>
                    <td>85.00€</td>
                </tr>
                <tr>
                    <td>Contrôle technique réglementaire VUL et 4x4</td>
                    <td>95.00€</td>
                </tr>
                <tr>
                    <td>Contrôle technique réglementaire GPL / GNC / HYBRIDE</td>
                    <td>105.00€</td>
                </tr>
                <tr>
                    <td>Contre-visite</td>
                    <td>10.00€ à 50.00€</td>
                </tr>
                <tr>
                    <td>Complémentaire pollution</td>
                    <td>50.00€</td>
                </tr>
                <tr>
                    <td>Contrôle volontaire complet</td>
                    <td>85.00€</td>
                </tr>
                </table>
            </div> 
        </div>
        <div class="reptabl2">
            <h2>Contrôle volontaire partiel</h2>
            <div class="rayas">
               <table>
                <tr>
                    <td>Identification</td>
                    <td>5.00€</td>
                </tr>
                <tr>
                    <td>Freinage(obligatoire)</td>
                    <td>20.00€ </td>
                </tr>
                <tr>
                    <td>Direction</td>
                    <td>7.00€</td>
                </tr>
                <tr>
                    <td>Visibilite</td>
                    <td>5.00€</td>
                </tr>
                <tr>
                    <td>Eclairage Signalidation</td>
                    <td>5.00€</td>
                </tr>
                <tr>
                    <td>Liasons au sol</td>
                    <td>15.00€</td>
                </tr>
                <tr>
                    <td>Structure Carrosserie</td>
                    <td>5.00€</td>
                </tr>
                <tr>
                    <td>Equipments</td>
                    <td>5.00€</td>
                </tr>
                <tr>
                    <td>Organes Mécaniques</td>
                    <td>12.00€</td>
                </tr>
                <tr>
                    <td>Pollution,Niveau Sonore</td>
                    <td>15.00€</td>
                </tr>
                </table> 
            </div>
        </div>
        <hr class="linn">
    </div>
    <div class="vvvv">
        <div class="detl">  
                <div class="detltxt">
                    <div class="detltxt2">
                        <h1>DIAGNOSTIQUE ÉLECTRONIQUE</h1>
                        <p>Grâce à un outil de diagnostique multi-marques et de nos compétences dans la recherche de pannes, nous pouvons, le plus souvent, résoudre les pannes survenu sur vôtre véhicule. Notre forfait diagnostique à 49,50 € comprend le passage à l'outil de diagnostique pour la lecture des défauts (voyant allumé au compteur avec ou sans message d'erreur) ainsi que 30 min de recherche de panne.</p>
                        <h2> Lecture des défauts et effacement voyants (si possible) 35 €.</h2> 
                    </div>
                    <div class="detltxt3">
                    <img src="../../Imagenes/carromec.jpeg" alt=""> 
                    </div>  
                </div>
                <div class="detltxt">
                    <h1>AMÉLIORATION/ENTRETIEN MOTEUR</h1>
                    <h2>DÉCALAMIN'HEURE</h2>
                    <p>Votre voiture émet des fumées noires ? Confiez-la au GARAGE DES SAULES ! Le moteur de votre voiture a peut-être besoin d’être décalaminé. <br> <br>

                        Spécialisés dans le décalaminage de moteur, nous ferons le nécessaire pour que votre véhicule soit moins polluant. Vous abaisserez aussi votre consommation et regagnerez la puissance moteur perdue par son encrassement ! <br> <br>
                        
                        Nous sommes en mesure d’effectuer un contrôle technique anti-pollution. <br> <br>
                        
                        Rendez-vous vite au GARAGE DES SAULES ! Que ce soit pour un simple entretien ou pour un problème mécanique, nous saurons répondre à vos attentes et vous donner satisfaction. Tarif de 80 € TTC. <br><br>
                        
                        Nettoyage des injecteurs qui provoquent des accoups, des sur-consommations de carburant, un ralenti instable. Grâce à un procédé réalisé dans nos atelier, nous arrivons a rendre une qualité de fonctionnement du système d'injection sans pour autan le remplacer, dans la limite du possible ! <br><br>
                        Le forfait comprend le produit et la main d'oeuvre. Celui-ci s'élève à 80 € TTC.</p>
                </div>
        </div>
        <div class="cont">
            <div class="back2">
                <strong><h1>Nous vous recevons dans notre garage dans une ambiance conviviale</h1></strong>
                <a href="../Contact/Contact.php"><button>Contactez-nous</button></a>
            </div>
        </div>
    </div>
</body>
</html>

<?php include('../heyfo/footer.php')?> 