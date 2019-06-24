<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
         <title>Ajout d'un Client</title>
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
        <div class="panel-heading">Formuaire d'un Client</div>
        <div class="panel-body">
            <form method="POST" action="Controller/GestionnaireController.php">
               <div class="form-group">
                    <label class="control-label">Code</label>
                    <input class="form-control" type="text" name="Code" id="Code" required="required" disabled="disabled" />
                </div>
                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input class="form-control" type="text" name="Nom" id="Nom" required="required"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input class="form-control" type="text" name="Prenom" id="Prenom" required="required"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Adresse</label>
                    <input class="form-control" type="text" name="Adresse" id="Adresse" required="required"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">Tel</label>
                    <input class="form-control" type="number" name="Tel" id="Tel" required="required"/>
                </div>
                 <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="text" name="Email" id="Email" required="required"/>
                </div>
                
                    <div class="form-group">
                            <label class="control-label">Agence</label>
                            <select class="form-control" name="idag">
                                <option value="">Choisissez une Agence</option>
                                <?php
                                   foreach ($list as $profil) {
                                       echo "<option value = '".$profil['idAg']."'>".$profil['nomAg']."</option>";
                                     
                                   }
                                ?>
                            </select>
                </div>
            
               
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="validerCl" value="Envoyer"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>
