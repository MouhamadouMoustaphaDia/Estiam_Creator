
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
        <div class="panel-heading">Formuaire Modification Client</div>
        <div class="panel-body">
            <form method="POST" action="Controller/GestionnaireController.php">
               <div class="form-group">
                    <label class="control-label">Code</label>
                    <input class="form-control" type="text" name="CodeCl" id="Code" required="required" value= <?php echo $list['0']['CodeCl']; ?>>
                </div>
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input class="form-control" type="text" name="NomCl" id="Nom" required="required" value= <?php echo $list['0']['NomCl']; ?>>
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input class="form-control" type="text" name="PrenomCl" id="Prenom" required="required" value= <?php echo $list['0']['PrenomCl']; ?>>
                </div>
               <div class="form-group">
                    <label class="control-label">Adresse</label>
                    <input class="form-control" type="text" name="AdresseCl" id="Adresse" required="required" value= <?php echo $list['0']['AdresseCl']; ?>>
                </div>
               
               <div class="form-group">
                    <label class="control-label">Tel</label>
                    <input class="form-control" type="text" name="TelCl" id="Tel" required="required" value= <?php echo $list['0']['TelCl']; ?>>
                </div>
                <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="text" name="EmailCl" id="Email" required="required" value= <?php echo $list['0']['EmailCl']; ?>>
                </div>
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="ModifierClient" value="Modifier"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
                <div class="form-group" style="visibility: hidden">
                    <label class="control-label">Id</label>
                    <input class="form-control" type="text" name="idCl" id="Code" required="required" value= <?php echo $list['0']['idCl']; ?>>
                </div>
                <div class="form-group" style="visibility: hidden">
                    <label class="control-label">user</label>
                    <input class="form-control" type="text" name="iduser" id="Code" required="required" value= <?php echo $list['0']['iduser']; ?>>
                </div>
          
            </form>
        </div>
    </div>
</div>

</body>
</html>