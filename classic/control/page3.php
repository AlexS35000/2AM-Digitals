<?php
/**
 * Created VSCODE
 * User: AM DIGITAL
 * Date: 14/02/2023
 */
// ------------------------------------------------------------------------ Appel des modèles
include('../model/MgtConnection.php');
include('../model/autoload.php');
// ------------------------------------------------------------------------ Requète d'affichage
$entete     = Contenu::selectOneById('10');
$section1   = Contenu::selectOneById('1');
$section2   = Contenu::selectOneById('2');
$section3   = Contenu::selectOneById('3');
$pied       = Contenu::selectOneById('4');
$metadon    = Contenu::selectOneById('11');
// ------------------------------------------------------------------------ Appel de la vue
include('../vue/page3.php');