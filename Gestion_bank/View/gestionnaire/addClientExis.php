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
        echo '<div class="alert alert-danger" >
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
                    <label class="control-label">id</label>
                    <input class="form-control" type="text" name="idcacher" id="id" disabled="disabled" value=" <?php echo $Client['0'] ;?>" />
                </div>
                <div class="form-group">
                    <label class="control-label">code</label>
                    <input class="form-control" type="text" name="code" id="id" disabled="disabled" value=" <?php echo $Client['1'] ;?>" />
                </div>

                <div class="form-group">
                    <label class="control-label">Nom</label>
                    <input class="form-control" type="text" name="Nomsn" id="Nom" disabled="disabled" value=" <?php echo $Client['2'] ; ?>" />
                </div>
                <div class="form-group">
                    <label class="control-label">Prenom</label>
                    <input class="form-control" type="text" name="Prenom" id="Prenom" disabled="disabled" value=" <?php echo $Client['3'] ; ?>" />
                </div>
                <div class="form-group">
                    <label class="control-label">Adresse</label>
                    <input class="form-control" type="text" name="Adresse" id="Adresse" disabled="disabled" value=" <?php echo $Client['4'] ; ?>" />
                </div>
                 <div class="form-group">
                    <label class="control-label">Tel</label>
                    <input class="form-control" type="text" name="Tel" id="Tel" disabled="disabled" value=" <?php echo $Client['5'] ; ?>" />
                </div>
                 <div class="form-group">
                    <label class="control-label">Email</label>
                    <input class="form-control" type="text" name="Email" id="Email" disabled="disabled" value=" <?php echo $Client['6'] ; ?>" />
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
                    <input class="btn btn-success" type="submit" name="validerClExis" value="Envoyer"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>

                <div class="form-group" style="visibility: hidden">
                    <label class="control-label">Nom</label>
                    <input class="form-control" type="text" name="Nom" id="Nom" value=" <?php echo $Client['2'] ; ?>" />
                </div>
                <div class="form-group" style="visibility: hidden">
                    <label class="control-label">id</label>
                    <input class="form-control" type="text" name="id" id="id" value=" <?php echo $Client['0'] ;?>" />
                </div>
            </form>
        </div>
    </div>
</div>


</body>
</html>
