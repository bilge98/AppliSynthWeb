<div>
    <form id="rechercheConvention" method="POST" action="../Controller/ModifierediterconventionController.php">
        <input id="numeroRue" type="number" placeholder="N°">
        <input id="nomConvention" type="text" placeholder="Nom">
        <button type="submit" name="btnRechercher">Rechercher</button>
    </form>
</div>
tableau dynamique - julien
<div>
   <div>
   <form id="consulterConvention" method="POST" action="../Controller/consultermodifierediterconventionController.php">
        <button type="submit" name="btnConsulter">Consulter</button>
    </form>
</div>
    <form id="modifierConvention" method="POST" action="../Controller/consultermodifierediterconventionController.php">
        <button type="submit" name="btnModifier">Modifier</button>
    </form>
</div>
<div>
    <form id="editerConvention" method="POST" action="../Controller/consultermodifierediterconventionController.php">
        <button type="submit" name="btnEditer">Editer</button>
    </form>
</div>
<div>
   <form id="retour" method="POST" action="../Controller/MenugestionconventionController.php">
        <button type="submit" name="btnRetour">Retour</button>
    </form>
</div>