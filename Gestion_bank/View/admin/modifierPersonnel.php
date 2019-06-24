
<!DOCTYPE html>
<html lang="fr">
<head>

  <meta charset="UTF-8">
         <title>Ajout d'un peersonnel</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
</head>
<body>

<?php
if(isset($_GET['ok']))
{
    if($_GET['ok'] == 1)
    {
        echo '<div class="alert alert-success" style="text-align: center;">
                                   Donnees ajoutees avec succes!
                          </div>';
    }else{
        echo '<div class="alert alert-danger">
                                   Erreur Serveur, Contactez l\'administrateur
                          </div>';
    }
}

?>

  <div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Formuaire Modification Personnel</div>
        <div class="panel-body">
            <form method="POST" action="Controller/AdminController.php">
               <div class="form-group">
                    <label class="control-label">Code</label>
                    <input class="form-control" type="text" name="Code" id="Code" required="required" value= <?php echo $list['CodePers']; ?>>
                </div>
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input class="form-control" type="text" name="Nom" id="Nom" required="required" value= <?php echo $list['NomPers']; ?>>
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input class="form-control" type="text" name="Prenom" id="Prenom" required="required" value= <?php echo $list['PrenomPers']; ?>>
                </div>
                 <div class="form-group">
                            <label class="control-label">Profil</label>
                            <select class="form-control" name="idProfil">
                                <option  value="">Choisir un Profil</option>
                                <?php
                                   foreach ($liste as $profil) {
                                       echo "<option value = '".$profil['idPe']."'>".$profil['NomPe']."</option>";
                                     
                                   }
                                ?>
                            </select>
                </div>
               
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="Modifier" value="Modifier"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
                <div class="form-group" style="visibility: hidden">
                    <label class="control-label">Id</label>
                    <input class="form-control" type="text" name="Id" id="Code" required="required" value= <?php echo $list['idPers']; ?>>
                </div>
                <div class="form-group" style="visibility: hidden">
                    <label class="control-label">iduser</label>
                    <input class="form-control" type="text" name="User" id="Nom" required="required" value= <?php echo $list['iduser']; ?>>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>