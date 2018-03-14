<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!isset($_REQUEST['action'])) {
    // on n est pas connecte
    $_REQUEST['action'] = 'afficherAjouter';
}



$action = $_REQUEST['action'];
switch ($action) {

    case 'afficherAjouter': {
            $listEleve = $pdo->selectEleve();
            $listEtab = $pdo->selectEtablissement();

            include("vues/v_ajouter.php");

            break;
        }
    case 'ajouterEtablissement': {


            $listEleve = $pdo->selectEleve();
            $listEtab = $pdo->selectEtablissement();

            $nomEtablissement = $_REQUEST['nomEtablissement'];
            $typeEtablissement = $_REQUEST['typeEtablissement'];
            $responsable = $_REQUEST['responsableEtablissement'];
            $pdo->insertEtablissement($nomEtablissement, $typeEtablissement, $responsable);
            $listEtab = $pdo->selectEtablissement();
            include("vues/v_ajouter.php");
            break;
        }
    case 'ajouterEleve': {
            $listEleve = $pdo->selectEleve();
            $listEtab = $pdo->selectEtablissement();

            $nomEleve = $_REQUEST['nomEleve'];
            $prenomEleve = $_REQUEST['prenomEleve'];
            $datenaissanceEleve = $_REQUEST['dateNaissanceEleve'];
            $idEtablissementEleve = $_REQUEST['etablissementEleve'];
            $classeEleve = $_REQUEST['classeEleve'];

            $pdo->insertEleve($nomEleve, $prenomEleve, $datenaissanceEleve);
            $idEleve = $pdo->selectMaxEleve();

            //++ Vérifier si la classe existe deja
            $pdo->insertClasse($classeEleve);
            $idClasse = $pdo->selectMaxClasse();
            $pdo->insertAppartient($idEtablissementEleve, $idEleve, $idClasse);
            $listEleve = $pdo->selectEleve();

            include("vues/v_ajouter.php");

            break;
        }
    case 'ajouterAVS': {
            $listEleve = $pdo->selectEleve();
            $listEtab = $pdo->selectEtablissement(); // à enlever par la suite lors du blocage des radiosboutons


            $nomAVS = $_REQUEST['nomAVS'];
            $prenomAVS = $_REQUEST['PrenomAVS'];
            $date_NaissanceAVS = $_REQUEST['dateNaissanceAVS'];
            $mailAVS = $_REQUEST['emailAVS'];
            $idEleve = $_REQUEST['eleveAssigneAVS'];
            $pdo->insertAVS($nomAVS, $prenomAVS, $date_NaissanceAVS, $mailAVS, $idEleve);
            $idMaxAvs = $pdo->selectMaxAVS();

            //création de la boucle permettant de récuperer les elves par rapports aux avs
            if (isset($idEleve)) {
                for ($i = 0; $i < sizeof($_REQUEST['eleveAssigneAVS']); $i++) {
                    //Insere les avs aux eleves sélectionnees
                    $idEleve = $_REQUEST['eleveAssigneAVS'][$i];
                    $pdo->updateEleveMax($idMaxAvs, $idEleve);
                    
                    //Insère dans la table gere les etblissements des avs
                    $etblissementEleve = $pdo->selectEtablissementEleve($idEleve);
               
                  $pdo->insertGere($idMaxAvs, $etblissementEleve);
                  
                }
            }

            include("vues/v_ajouter.php");
            break;
        }
}        