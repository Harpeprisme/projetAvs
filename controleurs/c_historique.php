<?php
 if (!isset($_REQUEST['action'])) {
    // on n est pas connecte
    $_REQUEST['action'] = 'afficherHistorique';
}

$getAllAnnee = $pdo->getAllAnnee();
$action = $_REQUEST['action'];
switch ($action) {

    case 'afficherHistorique': {
            require("vues/v_historique.php");
            break;
        }
}