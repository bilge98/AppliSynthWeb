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
        <!--PHP A RAJOUTER ICI POUR L'AJOUT D'UN INPUT SI ON CLIQUE SUR LE '+'-->
        <div>
            <input type="text" id="collaborateur1" name="collaborateur1" placeholder="Collaborateur" />
            <button id="btnPlus" onclick="addCollab()" name="btnPlus">+</button>
        </div>
        <!--PHP A RAJOUTER ICI POUR L'AJOUT D'UN INPUT SI ON CLIQUE SUR LE '+'-->
        <br/><br/>
        <!--PHP A RAJOUTER ICI POUR L'AJOUT D'UN INPUT SI ON CLIQUE SUR LE '+'-->
        <div>
            <input type="text" id="intituletache" name="intituleTache" placeholder="Intitule tâche" />
            <input type="number" id="quantite" name="quantite" placeholder="Qté" />
            <input type="number" id="prixht" name="prixHT" placeholder="Prix HT" />
        </div>
        <br/><br/>
        <!--PHP A RAJOUTER ICI POUR L'AJOUT D'UN INPUT SI ON CLIQUE SUR LE '+'-->

        <div>
          <input type="number" id="totalht" name="totalHT" placeholder="Total HT" />
          <input type="number" id="tva" name="TVA" placeholder="TVA" />
          <input type="number" id="totalttc" name="totalTTC" placeholder="Total TTC" />
        </div>
        <br/><br/>

        <div>
          <input type="number" id="accompte" name="accompte" placeholder="Accompte" />
           Date début : <input type="date" id="datedebut" name="dateDebut" placeholder="Date début" />
           Date fin : <input type="date" id="totalttc" name="DateFin" placeholder="Date fin" />
        </div>
        <br/><br/>
        <div>
          <input type="text" id="commentaire" name="commentaire" placeholder="Commentaire" height="200" />

        </div>
        <br/><br/>

        <div class="button_action">
            <div>
                <button type="submit" id="valider">Valider</button>
            </div>
            
            <div>
                <form id="retour" method="POST" action="../Controller/MenugestionutilisateurController.php">
                    <button type="submit" name="btnRetour">Retour</button>
                </form>
            </div>
            <div>
                <form id="deconnexion" method="POST" action="../Controller/FrontController.php">
                    <button type="submit" name="btnDeconnexion">Déconnexion</button>
                </form>
            </div>
            
        </div>

    </form> 
    <script src="../Controller/script_ajoutCollab.js"></script> 

</div><!--fin du layout_under_header-->
