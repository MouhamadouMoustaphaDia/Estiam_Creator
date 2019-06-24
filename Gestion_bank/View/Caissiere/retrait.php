<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
         <title>Retrait</title>
        <link rel="stylesheet" href="public/bootstrap-cerulean.min.css">
</head>
<body>
<?php
/*if(isset($_GET['ok']))
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
}*/
?>
	<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Formuaire Retrait D'argent</div>
        <div class="panel-body">
            <form method="POST" action="controller/CassiereController.php">
                <div class="form-group">
                    <label class="control-label">Saisrir Le Numéro du Compte</label>
                    <input class="form-control" type="text" name="numero" id="Matricule" required="required"/>
                </div>
                <div class="form-group">
                    <label class="control-label">Saisir Le Montant</label>
                    <input class="form-control" type="text" name="montant" id="Nom" required="required"/>
                </div>
                
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="valideretrait" value="Envoyer"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>