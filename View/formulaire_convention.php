
   <div id="layout_under_header">&nbsp;
    <form id="convention" method="POST"  action="../Controller/CreationconventionController.php" >
        <div>
            <input type="text" id="clientname" name="nomClient" placeholder="Nom client" />
            <input type="number" id="siretnumber" name="numSiret" placeholder="N° Siret" />
        </div>
        <br/><br/>
        <div>
            <input type="number" id="numero" name="numeroRue" placeholder="N°" />
            <input type="text" id="rue" name="rue" placeholder="Rue" />
            <input type="number" id="codepostal" name="codePostal" placeholder="Code postal" max="99999" />
        </div>
        <br/><br/>
     
        <div>
            <span id="zoneCollab">
                <input type="text" id="collaborateur1" name="collaborateur1" placeholder="Collaborateur" />
            </span>
            <input type="button" id="btnPlusCollab" onclick="addCollab()" name="btnPlusCollab" value="+"/>
        </div>
        <br/><br/>

        <div id="zoneTache">
            <input type="text" id="intituletache1" name="intituleTache1" placeholder="Intitule tâche" />
            <input type="number" id="quantite1" name="quantite1" onchange = "calculTotalHT()" placeholder="Qté" />
            <input type="number" id="prixht1" name="prixHT1" onchange = "calculTotalHT()" placeholder="Prix HT" />
            <input type="button" id="btnPlusTache" onclick="addTache()" name="btnPlusTache" value="+"/>
        </div>
            
        <br/><br/>


        <div>
          <input type="number" id="totalht" name="totalHT" placeholder="Total HT" readonly/>
          <input type="number" id="tva" name="TVA" onchange="calculTotalTTC()" placeholder="TVA" />
          <input type="number" id="totalttc" name="totalTTC" placeholder="Total TTC" readonly/>
        </div>
        <br/><br/>

        <div>
          <input type="number" id="accompte" name="accompte" placeholder="Accompte" />
           Date début : <input type="date" id="datedebut" name="dateDebut" placeholder="Date début" />
           Date fin : <input type="date" id="totalttc" name="DateFin" placeholder="Date fin" />
        </div>
        <br/><br/>
        <div>
          <input type="textarea" id="commentaire" name="commentaire" placeholder="Commentaire" height="200" />

        </div>
        <br/><br/>

        <div class="button_action">
            <div>
                <button type="submit" id="valider">Valider</button>
            </div>
        </div>

    </form>
    
    <div>
        <form id="retour" method="POST" action="../Controller/MenugestionconventionController.php">
            <button type="submit" name="btnRetour">Retour</button>
        </form>
    </div>
    <div>
        <form id="deconnexion" method="POST" action="../Controller/FrontController.php">
            <button type="submit" name="btnDeconnexion">Déconnexion</button>
        </form>
    </div>
    
    <script src="../Controller/script_ajoutCollab.js"></script>
    <script src="../Controller/script_ajoutTache.js"></script> 
    <script src="../Controller/script_calculPrixHT.js"></script> 
    <script src="../Controller/script_calculPrixTTC.js"></script>

</div><!--fin du layout_under_header-->
