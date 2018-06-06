<?php
// importe le fichier
 session_start();
require('../model/DtoFacture.php');
require('../model/DaoConvention.php');
require('../model/DtoConvention.php');
require('../model/DaoClient.php');
require('../model/DtoClient.php');

require('../Model/DtofacturePDF.php');


// - - - - - - - - - - - - - - - - - - - - - - - - - 
//
// #1 initialise les informations de base
//
// adresse de l'entreprise qui émet la facture
$adresse = "Junior Entreprise\n92 avenue Biels Nohr \n12321 Billeurvanne\n\ncontact@je.fr\n(+33) 3 45 67 89 12";

// adresse du client
$daoClient = new DaoClient("localhost","junior","root","");
$_SESSION['dtoClient'] = $dtoClient;
$client = $daoClient->getNomClient();

// pied de page
$piedPage1 = "Junior Entreprise - 92 Boulevard Biels Nohr - Billeurvanne contact@je.fr - (+33) 3 45 67 89 12";
$piedPage2 = "Les produits livrés demeurent la propriété exclusive de notre entreprise jusqu'au paiement complet de la présente facture.";
$piedPage3 = "SIRET 887 547 259 974 125";

// initialise l'objet facturePDF
// gabarit : 	template['header']
//		template['client']
//		template['footer']
//
// le constructeur attend 3 paramètres :
//	- l'adresse de l'entreprise qui émet la facture
//	- l'adresse du client
//	- le pied de page
//
$pdf = new facturePDF($adresse, $client, $piedPage1."\n".$piedPage2."\n".$piedPage3);

$pdf->setLogo('../Docs/Logo.png');


//
$pdf->productHeaderAddRow('', 75, 'L');
$pdf->productHeaderAddRow('Produit', 75, 'L');
$pdf->productHeaderAddRow('Référence', 40, 'C');
$pdf->productHeaderAddRow('Prix HT', 25, 'C');
$pdf->productHeaderAddRow('QTE', 15, 'C');
$pdf->productHeaderAddRow('Prix HT', 25, 'R');


$pdf->totalHeaderAddRow(40, 'L');
$pdf->totalHeaderAddRow(30, 'R');


$pdf->elementAdd('', 'traitEnteteProduit', 'content');
$pdf->elementAdd('', 'traitBas', 'footer');


// - - - - - - - - - - - - - - - - - - - - - - - - - 
//
// #2 Créer une facture
// gabarit :	template['infoFacture']
//		template['infoDate']
//		template['infoPage']
//
// initFacture() attend 3 paramètres :
//	- numéro de facture
//	- date
//	- texte affiché avant le numéro de page
//
$pdf->initFacture($_SESSION['DtoFacture']->getNumFacture(),$_SESSION['DtoFacture']-> getDateFacture(), "Lyon ".$_SESSION['DtoFacture']->getDateFacture(), "Page ");


$pdf->productAdd($_SESSION['DtoConvention']->getNomProjet(), $_SESSION['DtoConvention']->getNomProjet(), '7', '70.00');

// ligne des totaux
// gabarit : template['total']
//
// même principe que pour les lignes de produits.
// vous pouvez ajouter autant de ligne que vous souhaitez.
$pdf->totalAdd(array('Total HT', $_SESSION['DtoFacture']->getMontantHT() ));
$pdf->totalAdd(array('TVA', $_SESSION['DtoConvention']->getMontantTVA()));
$pdf->totalAdd(array('Total TTC', $_SESSION['DtoConvention']->getMontantTVA() + $_SESSION['DtoFacture']->getMontantHT()));


// - - - - - - - - - - - - - - - - - - - - - - - - - 
//
// #3 Importe le gabarit
//
// pour la démo j'ai enregistré le gabarit dans un fichier externe
//
require('../gabarit0.php');

// - - - - - - - - - - - - - - - - - - - - - - - - - 
//
// #4 Finalisation
//
// construit le PDF
//
$pdf->buildPDF();

$pdf->Output('Facture.pdf', 'D');

?>