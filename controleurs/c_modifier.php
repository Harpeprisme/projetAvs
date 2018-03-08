<?php

if (!isset($_REQUEST['action'])) {
    // on n est pas connecte
    $_REQUEST['action'] = 'afficherModifier';
}
$action = $_REQUEST['action'];




switch ($action) {

    case 'afficherModifier': {
            $selectEtablissement = $pdo->selectEtablissement();
            $selectEleve = $pdo->selectEleve();
            $selectAVS = $pdo->selectAVS();
            $selectClasse = $pdo->selectClasse();
            include("vues/v_modifier.php");
            break;
        }
    case 'afficherEtablissement': {

            require_once("../modele/modele.inc.php");
            $pdo = PdoExemple::getPdoExemple();
            $idEtablissement = $_REQUEST['id_etablissement'];
            $selectClasseEtablissementAjax = $pdo->selectEtablissementAjax($idEtablissement);
            echo $selectClasseEtablissementAjax;

            break;
        }

    case 'afficherEleve': {
            require_once("../modele/modele.inc.php");
            $pdo = PdoExemple::getPdoExemple();
            $idEleve = $_REQUEST['id_eleve'];
            $selectClasseEleveAjax = $pdo->selectEleveAjax($idEleve);
            echo $selectClasseEleveAjax;

            break;
        }
        
        case 'afficherAVS': {
            require_once("../modele/modele.inc.php");
            $pdo = PdoExemple::getPdoExemple();
            $idavs = $_REQUEST['id_avs'];
            $selectClasseAVSAjax = $pdo->selectAVSAjax($idavs);
            echo $selectClasseAVSAjax;

            break;
        }

    case 'modifierEtablissement': {
        
        var_dump($_REQUEST);
        
            include("vues/v_modifier.php");
            break;
        }
    case 'modifierEleve': {
            include("vues/v_modifier.php");
            break;
        }
    case 'modifierAVS': {
            include("vues/v_modifier.php");
            break;
        }
}