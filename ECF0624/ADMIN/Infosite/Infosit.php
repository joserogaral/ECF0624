<?php

include('../bd/bd.php');

$sentenciaSQLpp=$conexion->prepare("SELECT * FROM hoyca");
$sentenciaSQLpp->execute();
$listere=$sentenciaSQLpp->fetchALL(PDO::FETCH_ASSOC);

$hmo=(isset($_POST['hmo']))?$_POST['hmo']:"";
$hmf=(isset($_POST['hmf']))?$_POST['hmf']:"";
$hao=(isset($_POST['hao']))?$_POST['hao']:"";
$haf=(isset($_POST['haf']))?$_POST['haf']:"";
$sut=(isset($_POST['sut']))?$_POST['sut']:"";
$sui=(isset($_POST['sui']))?$_POST['sui']:"";
$sdt=(isset($_POST['sdt']))?$_POST['sdt']:"";
$sdi=(isset($_POST['sdi']))?$_POST['sdi']:"";
$stt=(isset($_POST['stt']))?$_POST['stt']:"";
$sti=(isset($_POST['sti']))?$_POST['sti']:"";
$ID=(isset($_POST['ID']))?$_POST['ID']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

switch($accion){        
                     
    case "Modifier":
        $sentenciaSQLpp= $conexion->prepare("UPDATE hoyca SET hmo=:hmo, hmf=:hmf, hao=:hao, haf=:haf, sut=:sut, sui=:sui, sdt=:sdt, sdi=:sdi, stt=:stt, sti=:sti WHERE ID=:ID");
        $sentenciaSQLpp->bindParam(':ID',$ID);
        $sentenciaSQLpp->bindParam(':hmo',$hmo);
        $sentenciaSQLpp->bindParam(':hmf',$hmf);
        $sentenciaSQLpp->bindParam(':hao',$hao);
        $sentenciaSQLpp->bindParam(':haf',$haf);
        $sentenciaSQLpp->bindParam(':sut',$sut);
        $sentenciaSQLpp->bindParam(':sui',$sui);
        $sentenciaSQLpp->bindParam(':sdt',$sdt);
        $sentenciaSQLpp->bindParam(':sdi',$sdi);
        $sentenciaSQLpp->bindParam(':stt',$stt);
        $sentenciaSQLpp->bindParam(':sti',$sti);
        $sentenciaSQLpp->execute();
       header("Location:infosit.php");
       break;
}
?>

<?php  include('../heyfooa/heya.php'); ?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Infosit.css">
    <title>Infosite</title>
</head>
<body>
    <div class="titu">
        <h3>Info du site</h3>
    </div>
    <form action="" method="post">
        <div class="contt">
            <?php foreach($listere as $librose){ ?>
            <div class="voigara">
                <div class="add">
                        <div class="tdh">
                            <h1>Horaires d'overture</h1>
                            <br>
                            <h1>Matin</h1>
                        </div>
                        <div>
                            <input type="hidden" class="lbl" value="<?php echo $librose['ID'] ?>"  name="ID" id="ID" placeholder="ID">
                        </div>
                        <div>
                            <label for="">Ouverture</label><br><br>
                            <input type="text" required class="lbl" value="<?php echo $librose['hmo'] ?>" name="hmo" id="hmo" placeholder="Ouverture">
                        </div>
                        <div>
                               <label for="">Fermeture</label><br><br>
                            <input type="text" required class="lbl" value="<?php echo $librose['hmf'] ?>" name="hmf" id="hmf" placeholder="Fermeture">
                        </div>
                        <br><br>
                        <h1>Apres midi</h1>
                        <div>
                            <label for="">Ouverture</label><br><br>
                            <input type="text" required class="lbl" value="<?php echo $librose['hao'] ?>" name="hao" id="hao" placeholder="Ouverture">
                        </div>
                        <div>
                            <label for="">Fermeture</label><br><br>
                            <input type="text" required class="lbl" value="<?php echo $librose['haf'] ?>" name="haf" id="haf" placeholder="Fermeture">
                        </div>
                </div>

                
                <div class="bots">
                        <div class="prin">
                            <div  role="group" aria-label="">
                                <button class="aj" type="submit" value="Modifier" name="accion">Modifier</button>
                            </div>
                        </div>   
                </div>
            </div>
            <?php } ?>
            <div class="voilist">
                <?php foreach($listere as $librose){ ?>
                    <h1>Informations</h1>
                    <br>
                    <br>
                    <br>
                    <div class="secc">
                        
                        <div class="botss">
                            <h2>Section 1</h2>
                        </div>
                        <div class="seecc1">
                            <input type="text" required class="lbl" value="<?php echo $librose['sut'] ?>"  name="sut" id="sut" placeholder="Titre">
                        </div>
                        <div class="seecc">
                            <input type="text" required class="lblt"  value="<?php echo $librose['sui'] ?>" name="sui" id="sui" placeholder="Texte">
                        </div>
                        
                        <div class="botss">
                            <h2>Section 2</h2>
                        </div>
                        <div class="seecc1">
                            <input type="text" required class="lbl" value="<?php echo $librose['sdt'] ?>"  name="sdt" id="sdt" placeholder="Titre">
                        </div>
                        <div class="seecc">
                            <input type="text" required class="lblt" value="<?php echo $librose['sdi'] ?>"  name="sdi" id="sdi" placeholder="Texte">
                        </div>

                        <div class="botss">
                            <h2>Section 3</h2>
                        </div>
                        <div class="seecc1">
                            <input type="text" required class="lbl" value="<?php echo $librose['stt'] ?>"  name="stt" id="stt" placeholder="Titre">
                        </div>
                        <div class="seecc">
                            <input type="text" required class="lblt" value="<?php echo $librose['sti'] ?>"  name="sti" id="sti" placeholder="Texte">
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </form> 


</body>
</html>