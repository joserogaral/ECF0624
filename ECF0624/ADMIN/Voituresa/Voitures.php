
<?php 
$SKU=(isset($_POST['SKU']))?$_POST['SKU']:"";
$marque=(isset($_POST['marque']))?$_POST['marque']:"";
$prix=(isset($_POST['prix']))?$_POST['prix']:"";
$km=(isset($_POST['km']))?$_POST['km']:"";
$details=(isset($_POST['details']))?$_POST['details']:"";
$ph=(isset($_FILES['ph']['name']))?$_FILES['ph']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include('../bd/bd.php');

switch($accion){

    case "Ajouter":
        $sentenciaSQL= $conexion->prepare("INSERT INTO garage (marque, prix, km, details, photos) VALUES (:marque, :prix, :km, :details, :photos);");
        $sentenciaSQL->bindParam(':marque',$marque);
        $sentenciaSQL->bindParam(':prix',$prix);
        $sentenciaSQL->bindParam(':km',$km);
        $sentenciaSQL->bindParam(':details',$details);
        $fecha= new DateTime();
        $nomar=($ph!="")?$fecha->getTimestamp()."_".$_FILES["ph"]["name"]:"imagen.jpg";

        $tmimg=$_FILES["ph"]["tmp_name"];

            if($nomar!=""){

                move_uploaded_file($tmimg,"../../Imagenes/".$nomar);

            }

        $sentenciaSQL->bindParam(':photos',$nomar);
        $sentenciaSQL->execute();
        break;

    case "Annuler":
        header("Location:Voitures.php");
        break;

    case "Modifier":
        $sentenciaSQL= $conexion->prepare("UPDATE garage SET marque=:marque, prix=:prix, km=:km, details=:details WHERE SKU=:SKU");
        $sentenciaSQL->bindParam(':SKU',$SKU);
        $sentenciaSQL->bindParam(':marque',$marque);
        $sentenciaSQL->bindParam(':prix',$prix);
        $sentenciaSQL->bindParam(':km',$km);
        $sentenciaSQL->bindParam(':details',$details);
        $sentenciaSQL->execute();
        if($ph!=""){

            $fecha= new DateTime();
            $nomar=($ph!="")?$fecha->getTimestamp()."_".$_FILES["ph"]["name"]:"imagen.jpg";
            $tmimg=$_FILES["ph"]["tmp_name"];

            move_uploaded_file($tmimg,"../../Imagenes/".$nomar);

            $sentenciaSQL= $conexion->prepare("SELECT photos FROM garage WHERE SKU=:SKU");
            $sentenciaSQL->bindParam(':SKU',$SKU);
            $sentenciaSQL->execute();
            $lilis=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

            if( isset($lilis["photos"]) &&($lislis["photos"]!="imagen.jpg")){
                if(file_exists("../../Imagenes/".$lilis["photos"])){
                    unlink("../../Imagenes/".$lilis["photos"]);
                }
            }

            $sentenciaSQL= $conexion->prepare("UPDATE garage SET marque=:marque, prix=:prix, km=:km, details=:details, photos=:photos WHERE SKU=:SKU");
            $sentenciaSQL->bindParam(':SKU',$SKU);
            $sentenciaSQL->bindParam(':marque',$marque);
            $sentenciaSQL->bindParam(':prix',$prix);
            $sentenciaSQL->bindParam(':km',$km);
            $sentenciaSQL->bindParam(':photos',$nomar);
            $sentenciaSQL->bindParam(':details',$details);
            $sentenciaSQL->execute();

        }
        break;
        
    case "Selectioner":
        $sentenciaSQL=$conexion->prepare("SELECT * FROM garage WHERE SKU=:SKU");
        $sentenciaSQL->bindParam(':SKU',$SKU);
        $sentenciaSQL->execute();
        $lilis=$sentenciaSQL->fetch(PDO::FETCH_LAZY);

        $marque=$lilis['marque'];
        $prix=$lilis['prix'];
        $km=$lilis['km'];
        $details=$lilis['details'];
        break;

    case "Supprimer":
        $sentenciaSQL=$conexion->prepare("SELECT photos FROM garage WHERE SKU=:SKU");
        $sentenciaSQL->bindParam(':SKU',$SKU);
        $sentenciaSQL->execute();
        $lilis=$sentenciaSQL->fetch(PDO::FETCH_LAZY);
        
        $sentenciaSQL= $conexion->prepare("DELETE FROM garage WHERE SKU=:SKU");
        $sentenciaSQL->bindParam(':SKU',$SKU);
        $sentenciaSQL->execute();
        /*$lilis=$sentenciaSQL->fetch(PDO::FETCH_LAZY);*/

        if( isset($lilis["photos"]) &&($lislis["photos"]!="imagen.jpg")){
            if(file_exists("../../Imagenes/".$lilis["photos"])){
                unlink("../../Imagenes/".$lilis["photos"]);
            }
        }
        header("Location:Voitures.php");
        break;
} 

$sentenciaSQL=$conexion->prepare("SELECT * FROM garage");
$sentenciaSQL->execute();
$liste=$sentenciaSQL->fetchALL(PDO::FETCH_ASSOC);
?>

<?php  include('../heyfooa/heya.php'); ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Voitures.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Voituresa</title>
</head>

<body>
    <div class="titu">
        <h1>Bienvenue <?php echo $nouse ?></h1>
        <h3>Voitures en vente</h3>
    </div>
    <div class="contt" class="col-md-12"> 
            <div class="voigara" class="card-body">
                <form method="post" enctype="multipart/form-data">
                    <div class="add">
                            <div>
                                <label for="">SKU</label><br><br>
                                <input type="text" required readonly class="lbl"  name="SKU" id="SKU" placeholder="SKU" value="<?php echo $SKU; ?>">
                            </div>
                            <div>
                                <label for="">Marque</label><br><br>
                                <input type="text" required class="lbl"  name="marque" id="marque" placeholder="Marque" value="<?php echo $marque; ?>">
                            </div>
                            <div>
                                <label for="">Prix</label><br><br>
                                <input type="text" required class="lbl"  name="prix" id="prix" placeholder="Prix" value="<?php echo $prix; ?>">
                            </div>
                            <div>
                                <label for="">Kilometrage</label><br><br>
                                <input type="text" required class="lbl"  name="km" id="km" placeholder="Kilometrage" value="<?php echo $km; ?>">
                            </div>
                            <div class="bff">
                                <label for="">Details</label> <br><br>
                                <input type="text" required class="lbl" name="details" id="details" placeholder="Details" value="<?php echo $details; ?>">
                            </div>
                        
                    </div>

                    <br>

                    <div class="bots">
                        <div class="mb">
                            <label for="" class="form-label">PHOTO</label>
                            <input type="file" multiple class="form-control" value="" name="ph" id="ph" placeholder="PHOTO">
                        </div>
                        <br>
                        <div class="prin">
                            <div  role="group" aria-label="">
                                <button class="aj" type="submit" value="Ajouter" name="accion">Ajouter</button>
                            </div>
                            <div  role="group" aria-label="">
                                <button class="mo" type="submit" value="Annuler" name="accion">Annuler</button>
                            </div>
                        </div>
                        <div class="supr">
                            <div class="sup"  role="group" aria-label="" >
                                <button class="sp" type="submit" value="Modifier" name="accion">Modifier</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        <div class="voilist">
            <table class="table" >
                <thead>
                    <tr>
                        <th>SKU</th>
                        <th>MARQUE</th>
                        <th>PRIX</th>
                        <th>KILOMETRAGE</th> 
                        <th>PHOTOS</th>
                        <th>ACCION</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach($liste as $libro){ ?>
                    <tr>
                        <td><?php echo $libro['SKU'] ?></td>
                        <td><?php echo $libro['marque'] ?></td>
                        <td><?php echo $libro['prix'] ?></td>
                        <td><?php echo $libro['km'] ?></td>
                        <td>
                            <a href="../../Imagenes/<?php echo $libro['photos'] ?>">
                                Voir 
                            </a>
                        </td>
                        <td>
                            <form class="orl" method="post">
                                <input type="hidden" name="SKU" id="SKU" value="<?php echo $libro['SKU'] ?>"/>
                                <input type="submit" name="accion" value="Selectioner" class="btn btn-primary"/>
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