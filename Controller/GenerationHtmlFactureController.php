<?php
// importe le fichier
 session_start();
 require('../model/DaoFacture.php');
require('../model/DtoFacture.php');
require('../model/DaoConvention.php');
require('../model/DtoConvention.php');
require('../model/DaoClient.php');
require('../model/DtoClient.php');

require('../Model/DtofacturePDF.php');


$dtoConvention = new DtoConvention($_POST['NumConvention'],$_POST['NomProjet'],$_POST['IdClient'],$_POST['DateDebut'],$_POST['DateFin'],$_POST['MontantHT'],$_POST['MontantTTC'], $_POST['Accompte'], $_POST['TVA'], $_POST['Signature'], $_POST['Commentaire']);
$daoConvention = new DaoConvention("localhost","junior","root","");
$_SESSION['DtoConvention'] = $dtoConvention;
$temp = $dtoConvention->getNomProjet();
echo "$temp";
       
echo'';

//adresse de notre société
echo '<br/>Junior Entreprise<br/>';
echo '92 avenue Biels Nohr<br/>';
echo '69000 Billeurvanne<br/>';
echo 'contact@je.fr<br/>';
echo '(+33) 3 45 67 89 12<br/>';

// adresse du client


// pied de page
$piedPage1 = "Junior Entreprise - 92 Boulevard Biels Nohr - Billeurvanne contact@je.fr - (+33) 3 45 67 89 12";
$piedPage2 = "Les produits livrés demeurent la propriété exclusive de notre entreprise jusqu'au paiement complet de la présente facture.";
$piedPage3 = "SIRET 887 547 259 974 125";


//ajout du logo



//ajout du projet


//ajout des infos de type prix ...


echo '</form>';

?>