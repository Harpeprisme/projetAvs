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
            include("vues/v_ajouter.php");
            break;
        }
    case 'ajouterEtablissement': {

//            var_dump($_REQUEST);
            $nomEtablissement = $_REQUEST['nomEtablissement'];
            $typeEtablissement = $_REQUEST['typeEtablissement'];
            $responsable = $_REQUEST['responsableEtablissement'];
            $pdo->ajouterEtablissement($nomEtablissement, $typeEtablissement, $responsable);
            include("vues/v_ajouter.php");
            break;
        }
    case 'ajouterEleve': {
    		$nomEleve = $_REQUEST['nomEleve'];
    		$prenomEleve = $_REQUEST['prenomEleve'];
    		$datenaissanceEleve = $_REQUEST['date_naissanceEleve'];
    		$etablissementEleve = $_REQUEST['etablissementEleve'];
    		$classeEleve = $_REQUEST['classeEleve'];
            $pdo->ajouterEleve($nomEleve, $prenomEleve, $date_naissanceEleve);
            include("vues/v_ajouter.php");
            break;
        }
    case 'ajouterAVS': {
            $pdo->ajouterAVS();
            include("vues/v_ajouter.php");
            break;
        }
}