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
// ------------------------------------------------------------------------ Meta Données
$meta_des   = $metadon->getCol1();
$meta_key   = $metadon->getCol2();
$meta_aut   = "2AM DIGITALS";
$meta_tit   = $entete->getTit().' - '.$entete->getTex();
// ------------------------------------------------------------------------ Code Couleur CSS dynamique
$me         = "background-color:".$entete->getCol5().";";
$de         = "background-color:".$entete->getCol1().";";
$f1         = "background-color:".$section1->getCol1().";";
$f2         = "background-color:".$section2->getCol1().";";
$f3         = "background-color:".$section3->getCol1().";";
$f4         = "background-color:".$section2->getCol1().";";
// ------------------------------------------------------------------------ Code Couleur Textes
$bd1        = "color:".$entete->getCol3().";";
$bd2        = "color:".$entete->getCol4().";";
$s11        = "color:".$section1->getCol3().";";
$s12        = "color:".$section1->getCol4().";";
$s21        = "color:".$section2->getCol3().";";
$s22        = "color:".$section2->getCol4().";";
$s31        = "color:".$section3->getCol3().";";
$s32        = "color:".$section3->getCol4().";";
$s41        = "color:".$section2->getCol3().";";
$s42        = "color:".$section2->getCol4().";";
$s43        = "color:".$section2->getCol4()."; font-size:1rem; margin-top:15px;";

//------------------------------------------------------------------------------------ Background rgba
$col1       = str_replace('#','',$entete->getCol1());
$rgba      = "background-color:".$entete->getCol2().";";;

// ------------------------------------------------------------------------ Appel de la vue
include('../vue/page1.php');