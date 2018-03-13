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
$allListAVSParEtab = $pdo->allListAVSParEtab();

$action = $_REQUEST['action'];
switch ($action) {

    case 'afficherInformations': {
            $paramSelect = "etab";
            require("vues/v_informations.php");
            break;
        }

    case 'getEleveAVSEtab': {
        if(isset($_GET['IdEtab'])){
            $infoEtab = $pdo->getInfoEtab($_GET['IdEtab']);
            $listEleveParEtab = $pdo->listEleveParEtab($_GET['IdEtab']);
        }
        
        if(isset($_GET['IdAVS'])){
         $infoAVS = $pdo->getInfoAVS($_GET['IdAVS']);    
         $getAVSEtab2 = $pdo->getAVSEtab($_GET['IdAVS']);
         $getAVSEleve2 = $pdo->getAVSEleve($_GET['IdAVS']);
        }
        $paramSelect = "etab";
        require("vues/v_informations.php");
        break;
    }

    case 'getInfoAVSParEleve': {
        $infoEleve = $pdo->getInfoEleve($_GET['IdEleve']);
        $EtabEleve = $pdo->getEtabEleve($_GET['IdEleve']);
        $ClasseEleve = $pdo->getClasseEleve($_GET['IdEleve']);
        if($_GET['IdAVS']){
            $infoAVS3 = $pdo->getInfoAVS($_GET['IdAVS']);
            $getAVSEtab = $pdo->getAVSEtab($_GET['IdAVS']);
            $getAVSEleve = $pdo->getAVSEleve($_GET['IdAVS']);
        }
        $paramSelect = "eleve";
        require("vues/v_informations.php");
        break;
    }

    case 'getEtabEleveParAVS': {
         $infoAVS2 = $pdo->getInfoAVS($_GET['IdAVS']);
         $getAVSEtab = $pdo->getAVSEtab($_GET['IdAVS']);
         $getAVSEleve = $pdo->getAVSEleve($_GET['IdAVS']);
         $paramSelect = "avs";
        require("vues/v_informations.php");
        break;
    }
}