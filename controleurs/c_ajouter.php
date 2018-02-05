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
        $listEtab = $pdo->selectEtablissement();// à enlever par la suite lors du blocage des radiosboutons
          
            include("vues/v_ajouter.php");

            break;
        }
    case 'ajouterEtablissement': {

        $listEleve = $pdo->selectEleve();
        $listEtab = $pdo->selectEtablissement();// à enlever par la suite lors du blocage des radiosboutons



            $nomEtablissement = $_REQUEST['nomEtablissement'];
            $typeEtablissement = $_REQUEST['typeEtablissement'];
            $responsable = $_REQUEST['responsableEtablissement'];
            $pdo->insertEtablissement($nomEtablissement, $typeEtablissement, $responsable);
            $listEtab = $pdo->selectEtablissement();// à enlever par la suite lors du blocage des radiosbouto
            include("vues/v_ajouter.php");
            break;
        }
    case 'ajouterEleve': {

        $listEleve = $pdo->selectEleve();
        $listEtab = $pdo->selectEtablissement();// à enlever par la suite lors du blocage des radiosboutons

            $nomEleve = $_REQUEST['nomEleve'];
            $prenomEleve = $_REQUEST['prenomEleve'];
            $datenaissanceEleve = $_REQUEST['dateNaissanceEleve'];
            $etablissementEleve = $_REQUEST['etablissementEleve'];
            $classeEleve = $_REQUEST['classeEleve'];

            $pdo->insertEleve($nomEleve, $prenomEleve, $datenaissanceEleve);
            $pdo->insertClasse($classeEleve);
            

            $listEleve = $pdo->selectEleve();
            include("vues/v_ajouter.php");
            break;
        }
    case 'ajouterAVS': {

        $listEleve = $pdo->selectEleve();
        $listEtab = $pdo->selectEtablissement();// à enlever par la suite lors du blocage des radiosboutons


            $nomAVS = $_REQUEST['nomAVS'];
            $prenomAVS = $_REQUEST['PrenomAVS'];
            $date_NaissanceAVS = $_REQUEST['dateNaissanceAVS'];
            $mailAVS = $_REQUEST['emailAVS'];
            $pdo->insertAVS($nomAVS, $prenomAVS, $date_NaissanceAVS, $mailAVS);

            // REQUUeête foreign key eleve

            include("vues/v_ajouter.php");
            break;
        }
}