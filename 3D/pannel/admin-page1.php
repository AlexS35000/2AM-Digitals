<?php

/**
 * Created VSCODE
 * User: AM DIGITAL
 * Date: 14/02/2023
 */
// ------------------------------------------------------------------------ Appel des modèles
include('../model/MgtConnection.php');
include('../model/autoload.php');
$entete     = Contenu::selectOneById('10');
$section1   = Contenu::selectOneById('1');
$section2   = Contenu::selectOneById('2');
$section3   = Contenu::selectOneById('3');
$pied       = Contenu::selectOneById('4');
$metadon    = Contenu::selectOneById('11');

if (isset($_POST['couleur'])) {
    $id             = $_POST['id'];
    $col1           = $_POST['col1'];
    $col2           = $_POST['col2'];
    $col3           = $_POST['col3'];
    $col4           = $_POST['col4'];
    $col5           = $_POST['col5'];
    $tit            = $_POST['tit'];
    $tex            = $_POST['tex'];
    $contenuMAJ = new Contenu();
    $contenuMAJ->setId($id);
    $contenuMAJ->setCol1($col1);
    $contenuMAJ->setCol2($col2);
    $contenuMAJ->setCol3($col3);
    $contenuMAJ->setCol4($col4);
    $contenuMAJ->setCol5($col5);
    $contenuMAJ->setTit($tit);
    $contenuMAJ->setTex($tex);
    Contenu::update($contenuMAJ);

    if (empty($_FILES['logo']['name'])) {
    } else {
        $logo       = $_FILES['logo']['name'];
        $fichier        = $_FILES['logo']['tmp_name'];
        $ext0           = pathinfo($logo, PATHINFO_EXTENSION);
        $ext            = strtolower($ext0);
        $uploadfile     = '../ressources/commun/' . $id . '.webp';
        $dimension      = getimagesize($fichier);
        $largeur        = $dimension[0];
        $hauteur        = $dimension[1];
        $largmax        = 480;
        if ($largeur > $largmax) {
            $ratio      = ROUND(($largeur / $largmax), 1);
            $newlar     = ROUND(($largeur / $ratio), 0);
            $newhau     = ROUND(($hauteur / $ratio), 0);
        } else {
            $newlar     = $largeur;
            $newhau     = $hauteur;
        }
        if ($logo != '') {
            if ($ext == 'jpg') {
                $image          = imagecreatefromjpeg($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            if ($ext == 'jpeg') {
                $image          = imagecreatefromjpeg($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            if ($ext == 'png') {
                $image          = imagecreatefrompng($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            if ($ext == 'gif') {
                $image          = imagecreatefromgif($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            if ($ext == 'webp') {
                $image          = imagecreatefromgif($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            imagewebp($nouvelle, $uploadfile, 100);
            imagedestroy($nouvelle);
        }
        if (isset($_FILES['lien']['name'])) {
            $video = $_FILES['lien']['name'];
            $fichier = $_FILES['lien']['tmp_name'];
            $uploadfile = '../ressources/video/video.mp4';
            if ($video != '') {
                move_uploaded_file($fichier, $uploadfile);
            }
        }
    }
    // --------------------------------------------------------------------------------------------------------------------- REDIRECTION VERS LA PAGE
    echo "<script type='text/javascript'>window.location='admin';</script>";
}

if (isset($_POST['action'])) {
    $id             = $_POST['id'];
    $col1           = $_POST['col1'];
    $col3           = $_POST['col3'];
    $tit            = $_POST['tit'];
    $col4           = $_POST['col4'];
    $tex            = $_POST['tex'];
    $contenuMAJ = new Contenu();
    $contenuMAJ->setId($id);
    $contenuMAJ->setCol1($col1);
    $contenuMAJ->setCol3($col3);
    $contenuMAJ->setTit($tit);
    $contenuMAJ->setCol4($col4);
    $contenuMAJ->setTex($tex);
    Contenu::update($contenuMAJ);

    if (empty($_FILES['vignette']['name'])) {
    } else {
        $vignette       = $_FILES['vignette']['name'];
        $fichier        = $_FILES['vignette']['tmp_name'];
        $ext0           = pathinfo($vignette, PATHINFO_EXTENSION);
        $ext            = strtolower($ext0);
        $uploadfile     = '../ressources/images/' . $id . '.webp';
        $dimension      = getimagesize($fichier);
        $largeur        = $dimension[0];
        $hauteur        = $dimension[1];
        $largmax        = 640;
        if ($largeur > $largmax) {
            $ratio      = ROUND(($largeur / $largmax), 1);
            $newlar     = ROUND(($largeur / $ratio), 0);
            $newhau     = ROUND(($hauteur / $ratio), 0);
        } else {
            $newlar     = $largeur;
            $newhau     = $hauteur;
        }
        if ($vignette != '') {
            if ($ext == 'jpg') {
                $image          = imagecreatefromjpeg($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            if ($ext == 'jpeg') {
                $image          = imagecreatefromjpeg($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            if ($ext == 'png') {
                $image          = imagecreatefrompng($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            if ($ext == 'gif') {
                $image          = imagecreatefromgif($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            if ($ext == 'webp') {
                $image          = imagecreatefromgif($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            imagewebp($nouvelle, $uploadfile, 100);
            imagedestroy($nouvelle);
        }
    }
    // --------------------------------------------------------------------------------------------------------------------- REDIRECTION VERS LA PAGE
    echo "<script type='text/javascript'>window.location='admin';</script>";
}
// ------------------------------------------------------------------------ Appel de la vue
$entete     = Contenu::selectOneById('10');
$section1   = Contenu::selectOneById('1');
$section2   = Contenu::selectOneById('2');
$section3   = Contenu::selectOneById('3');
$pied       = Contenu::selectOneById('4');
$metadon    = Contenu::selectOneById('11');
// ------------------------------------------------------------------------ Code Couleur CSS dynamique
$me         = "background-color:".$entete->getCol5().";";
$de         = "background: linear-gradient(90deg,".$entete->getCol1()." 50%,".$entete->getCol2()." 50%);";
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
$col2       = str_replace('#','',$entete->getCol2());
$split1     = str_split($col1, 2);
$split2     = str_split($col2, 2);
$rgba      = "background: linear-gradient(90deg, 
rgb(".hexdec($split1[0]).", ".hexdec($split1[1]).", ".hexdec($split1[2]).") 0%,
rgb(".hexdec($split2[0]).", ".hexdec($split2[1]).", ".hexdec($split2[2]).") 50%, 
rgb(".hexdec($split1[0]).", ".hexdec($split1[1]).", ".hexdec($split1[2]).") 80% );";
include('../vue/admin1.php');
