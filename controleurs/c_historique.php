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

    case 'getAllAVS': {
        if(isset($_GET['annee']))
            $getAVSParAnnee = $pdo->getAVSParAnnee(2018);
        require("vues/v_historique.php");
        break;
    }
    case 'getEleveAVSParAnnee':{
        if(isset($_GET['annee']))
            $getAVSParAnnee = $pdo->getAVSParAnnee(2018);
        if(isset($_GET['annee']) && isset($_GET['IdAVS']))
            $getEleveAVSParAnnee = $pdo->getEleveAVSParAnnee($_GET['IdAVS'], $_GET['annee']);
        require("vues/v_historique.php");
        break;
    }
}