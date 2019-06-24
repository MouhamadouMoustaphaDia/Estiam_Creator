




<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Formuaire Recherche Compte</div>
        <div class="panel-body">
            <form method="POST" action="Controller/CassiereController.php">
               
                <div class="form-group">
                    <label class="control-label">Entrer le numero</label>
                    <input class="form-control" type="text" name="compte" id="compte" required="required"/>
                </div>
               
                <div class="form-group">
                    <input class="btn btn-success" type="submit" name="RechercheCompte" value="Envoyer"/>
                    <input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
                </div>
            </form>
        </div>
    </div>
</div>