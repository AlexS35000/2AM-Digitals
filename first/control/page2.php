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
$section1   = Contenu::selectOneById('2');
$section2   = Contenu::selectOneById('200');
$section3   = Contenu::selectOneById('201');
$section4   = Contenu::selectOneById('202');
$pied       = Contenu::selectOneById('4');
$metadon    = Contenu::selectOneById('11');
// ------------------------------------------------------------------------ Meta Données
$meta_des   = $metadon->getCol1();
$meta_key   = $metadon->getCol2();
$meta_aut   = "2AM DIGITALS";
$meta_tit   = $entete->getTit().' - '.$entete->getTex();
// ------------------------------------------------------------------------ Code Couleur CSS dynamique
$me         = "background-color:".$entete->getCol5().";";                                                  // Couleur menu
$de         = "background: linear-gradient(90deg,".$entete->getCol1()." 50%,".$entete->getCol2()." 50%);"; // Couleur fond de page
$f1         = "background-color:".$section1->getCol1().";";                                                // Couleur fond section 1
$f2         = "background-color:".$section2->getCol1().";";                                                // Couleur fond section 2
$f3         = "background-color:".$section3->getCol1().";";                                                // Couleur fond section 3
$f4         = "background-color:".$section4->getCol1().";";                                                // Couleur fond section 4
// ------------------------------------------------------------------------ Code Couleur Textes
$bd1        = "color:".$entete->getCol3().";";
$bd2        = "color:".$entete->getCol4().";";
$s11        = "color:".$section1->getCol3().";";
$s12        = "color:".$section1->getCol4().";";
$s21        = "color:".$section2->getCol3().";";
$s22        = "color:".$section2->getCol4().";";
$s31        = "color:".$section3->getCol3().";";
$s32        = "color:".$section4->getCol4().";";
//------------------------------------------------------------------------------------ Background rgba
$col1       = str_replace('#','',$entete->getCol1());
$col2       = str_replace('#','',$entete->getCol2());
$split1     = str_split($col1, 2);
$split2     = str_split($col2, 2);
$rgba      = "background: linear-gradient(90deg, 
rgb(".hexdec($split1[0]).", ".hexdec($split1[1]).", ".hexdec($split1[2]).") 0%,
rgb(".hexdec($split2[0]).", ".hexdec($split2[1]).", ".hexdec($split2[2]).") 50%, 
rgb(".hexdec($split1[0]).", ".hexdec($split1[1]).", ".hexdec($split1[2]).") 80% );";
// ------------------------------------------------------------------------ Appel de la vue
include('../vue/page2.php');