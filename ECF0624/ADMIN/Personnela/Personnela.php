<?php
include('../bd/bd.php');

$ID=(isset($_POST['ID']))?$_POST['ID']:"";
$nom=(isset($_POST['nom']))?$_POST['nom']:"";
$prenom=(isset($_POST['prenom']))?$_POST['prenom']:"";
$DDN=(isset($_POST['DDN']))?$_POST['DDN']:"";
$email=(isset($_POST['email']))?$_POST['email']:"";
$telephone=(isset($_POST['telephone']))?$_POST['telephone']:"";
$pass=(isset($_POST['pass']))?$_POST['pass']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
$poster=(isset($_POST['idposte']))?$_POST['idposte']:"";


switch($accion){
    case "Ajouter":
        $sent= $conexion->prepare("INSERT INTO Personnel (nom, prenom, DDN, email, telephone, IDrol, password) VALUES (:nom, :prenom, :DDN, :email, :telephone, :IDrol, :password);");
        $sent->bindParam(':nom',$nom);
        $sent->bindParam(':prenom',$prenom);
        $sent->bindParam(':DDN',$DDN);
        $sent->bindParam(':email',$email);
        $sent->bindParam(':telephone',$telephone);
        $sent->bindParam(':IDrol',$poster);
        $sent->bindParam(':password',$pass);
        $sent->execute();
        header("Location:Personnela.php");
    break;

    case "Annuler":
        header("Location:Personnela.php");
    break;

    case "Modifier":
        $sent= $conexion->prepare("UPDATE Personnel SET nom=:nom, prenom=:prenom, DDN=:DDN, email=:email, telephone=:telephone, IDrol=:IDrol, password=:password WHERE ID=:ID");
        $sent->bindParam(':ID',$ID);
        $sent->bindParam(':nom',$nom);
        $sent->bindParam(':prenom',$prenom);
        $sent->bindParam(':DDN',$DDN);
        $sent->bindParam(':email',$email);
        $sent->bindParam(':telephone',$telephone);
        $sent->bindParam(':IDrol',$poster);
        $sent->bindParam(':password',$pass);
        $sent->execute();
        header("Location:Personnela.php");
    
    break;

    case "Selectioner":
        $sent=$conexion->prepare("SELECT * FROM Personnel WHERE ID=:ID");
        $sent->bindParam(':ID',$ID);
        $sent->execute();
        $lilise=$sent->fetch(PDO::FETCH_LAZY);

        $nom=$lilise['nom'];
        $prenom=$lilise['prenom'];
        $DDN=$lilise['DDN'];
        $email=$lilise['email'];
        $telephone=$lilise['telephone'];
        $pass=$lilise['password'];
        $poster=$lilise['IDrol'];
    break;

    case "Supprimer":
        $sent= $conexion->prepare("DELETE FROM Personnel WHERE ID=:ID");
        $sent->bindParam(':ID',$ID);
        $sent->execute();
        header("Location:personnela.php");
        break;
}



$sentenciaS=$conexion->prepare("SELECT * FROM Personnel");
$sentenciaS->execute();
$listezz=$sentenciaS->fetchALL(PDO::FETCH_ASSOC);
?>

<?php  include('../heyfooa/heya.php'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Personnela.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Personnela</title>
</head>
<body>
    <div class="titu">
        <h3>P e r s o n n e l</h3>
    </div>
    <div class="contt">
        <div class="voigara">
            <form method="post">
                <div class="add">
                            <div>
                                <label for="">ID</label><br><br>
                                <input type="text"  readonly class="lbl" value="<?php echo $ID;?>"  name="ID" id="ID" placeholder="ID">
                            </div>
                            <div>
                                <label for="">Nom</label><br><br>
                                <input type="text"  class="lbl" value="<?php echo $nom;?>" name="nom" id="nom" placeholder="Nom">
                            </div>
                            <div>
                                <label for="">Prenom</label><br><br>
                                <input type="text"  class="lbl" value="<?php echo $prenom;?>" name="prenom" id="prenom" placeholder="Prenom">
                            </div>
                            <div>
                                <label for="">Date de naissance</label><br><br>
                                <input type="text"  class="lbl" value="<?php echo $DDN;?>" name="DDN" id="DDN" placeholder="DDN">
                            </div>
                            <div> 
                                <label for="">Email</label> <br><br>
                                <input type="text"  class="lbl" value="<?php echo $email;?>" name="email" id="email" placeholder="Email">
                            </div>
                            <div>
                                <label for="">Telephone</label> <br><br>
                                <input type="text"  class="lbl" value="<?php echo $telephone;?>" name="telephone" id="telephone" placeholder="Telephone">
                            </div>
                            <div>
                                <label for="">Password</label> <br><br>
                                <input type="text"  class="lbl" value="<?php echo $pass;?>" name="pass" id="pass" placeholder="Password">
                            </div> 
                    </div>
                    <br><br>
                    <div class="select">
                        <label for="">Poste</label> <br><br>
                        <select name="idposte" class="coucc">
                            <option value="" selected >Selectioner</option>
                            <?php
                            $sentenciaSp=$conexion->query("SELECT * FROM roles");
                            $listez=$sentenciaSp->fetchALL(PDO::FETCH_ASSOC);
                            $sentenciaSp->execute();

                            
                            foreach($listez as $ligne):
                                echo "<option value='".$ligne['ID']."'>".$ligne['rol']."</option>";  
                            endforeach;
                            ?>
                        </select>
                    </div>

                <br><br><br>
                <div class="bots">
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
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>DDN</th>
                        <th>Email</th>
                        <th>Telephone</th>
                        <th>Password</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                <tbody>
                <?php foreach($listezz as $uves){ ?>
                    <tr>
                        <td><?php echo $uves['ID'] ?></td>
                        <td><?php echo $uves['nom'] ?></td>
                        <td><?php echo $uves['prenom'] ?></td>
                        <td><?php echo $uves['DDN'] ?></td>
                        <td><?php echo $uves['email'] ?></td>
                        <td><?php echo $uves['telephone'] ?></td>
                        <td><?php echo $uves['password'] ?></td>

                        
                        <td>
                            <form class="orl" method="post">
                                <input type="hidden" name="ID" id="ID" value="<?php echo $uves['ID'] ?>"/>
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