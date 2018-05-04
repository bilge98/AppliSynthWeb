<div>
   <p>Reinitialisation de mot de passe</p>
    <form id="oublieMdp" method="POST" action="../Controller/OubliemdpController.php">
        <label for="exempleUsername">Identifiant</label>
        <input type="user" name="username" placeholder="Votre Identifiant">
        <label for="exemplePassword">Mot de passe</label>
        <input type="password" class="form-control" name="password" placeholder="nouveau mot de passe">
        <button type="submit" name="btnReinitialiser">Reinitialiser</button>
    </form>
</div>
<div>
   <form id="retour" method="POST" action="../Controller/FrontController.php">
        <button type="submit" name="btnRetour">Retour</button>
    </form>
</div>