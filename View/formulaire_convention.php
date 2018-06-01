<div id="layout_under_header">&nbsp;</div>
  <form id="convention" action="" >
    <div>
      <input type="type" id="clientname" placeholder="Nom client" />
      <input type="number" id="siretnumber" placeholder="N° Siret" />
    </div>
    <br/><br/>
    <div>
      <input type="number" id="numero" placeholder="N°" />
      <input type="text" id="rue" placeholder="Rue" />
      <input type="number" id="codepostal" placeholder="Code postal" max="99999" />
    </div>
    <br/><br/>
    <div>
      <input type="text" id="collaborateur" placeholder="Collaborateur" />
    </div>
    <br/><br/>
    <div>
      <input type="text" id="intituletache" placeholder="Intitule tâche" />
      <input type="number" id="quantite" placeholder="Qté" />
      <input type="number" id="prixht" placeholder="Prix HT" />
    </div>
    <br/><br/>
    <!--PHP A RAJOUTER ICI POUR L'AJOUT D'UN INPUT SI ON CLIQUE SUR LE '+'-->

    <div>
      <input type="number" id="totalht" placeholder="Total HT" />
      <input type="number" id="tva" placeholder="TVA" />
      <input type="number" id="totalttc" placeholder="Total TTC" />
    </div>
    <br/><br/>

    <div>
      <input type="number" id="accompte" placeholder="Accompte" />
       Date début : <input type="date" id="datedebut" placeholder="Date début" />
       Date fin : <input type="date" id="totalttc" placeholder="Date fin" />
    </div>
    <br/><br/>
    <div>
      <input type="text" id="commentaire" placeholder="Commentaire" height="200" />
      
    </div>
    <br/><br/>

    <div class="button_action">
      <button type="submit" id="retour"><a href="index.html">Retour</a></button>
      <button type="submit" id="valider"><a href="">Valider la convention</a></button>
      <button type="submit" id="deconnexion"><a href="">Déconnexion</a></button>
    </div>

  </form>  

</div><!--fin du layout_under_header-->
