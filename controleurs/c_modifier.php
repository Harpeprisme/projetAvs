<?php

if (!isset($_REQUEST['action'])) {
    // on n est pas connecte
    $_REQUEST['action'] = 'afficherModifier';
}
$action = $_REQUEST['action'];

$selectEtablissement = $pdo->selectEtablissement();
$selectEleve = $pdo->selectEleve();
$selectAVS = $pdo->selectAVS();


switch ($action) {

    case 'afficherModifier': {
            include("vues/v_modifier.php");
            break;
        }
    case 'modifierEtablissement': {
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