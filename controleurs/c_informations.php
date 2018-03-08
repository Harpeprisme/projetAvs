<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

 if (!isset($_REQUEST['action'])) {
    // on n est pas connecte
    $_REQUEST['action'] = 'afficherInformations';
}

$listEleve = $pdo->selectEleve();
$listAVS = $pdo->selectAVS();
$listEtab = $pdo->selectEtablissement();// à enlever par la suite lors du blocage des radiosboutons
$listAppartient = $pdo->selectAppartient();

$action = $_REQUEST['action'];
switch ($action) {

    case 'afficherInformations': {
           require("vues/v_informations.php");
            break;
        }

    case 'getEleveAVSEtab': {
        $listEleveParEtab = $pdo->listEleveParEtab($_GET['IdEtab']);
        $listAVSParEtab = $pdo->listAVSParEtab($_GET['IdEtab']);
        require("vues/v_informations.php");
        break;
    }

    case 'getInfoAVSParEleve': {
        $getInfoEleve = $pdo->getInfoEleve($_GET['IdEleve']);
        if($_GET['IdAVS']){
            $getAVSEtab = $pdo->getAVSEtab($_GET['IdAVS']);
            $getAVSEleve = $pdo->getAVSEleve($_GET['IdAVS']);
        }
        require("vues/v_informations.php");
        break;
    }

    case 'getEtabEleveParAVS': {
         $getAVSEtab = $pdo->getAVSEtab($_GET['IdAVS']);
         $getAVSEleve = $pdo->getAVSEleve($_GET['IdAVS']);
        require("vues/v_informations.php");
        break;
    }
}