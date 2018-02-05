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

$action = $_REQUEST['action'];
switch ($action) {

    case 'afficherInformations': {
           echo $listEtab[0]['nom'];
           require("vues/v_informations.php");
            break;
        }
}