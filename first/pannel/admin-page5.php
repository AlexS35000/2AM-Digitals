<?php

/**
 * Created VSCODE
 * User: AM DIGITAL
 * Date: 14/02/2023
 */
// ------------------------------------------------------------------------ Vérifier si connecté
session_start();
if(empty($_SESSION['connecte'])){
    echo '<script type="text/javascript"> 
window.location="admin-connexion"; 
</script>';
    Exit();
}
// ------------------------------------------------------------------------ Appel des modèles
include('../model/MgtConnection.php');
include('../model/autoload.php');
$entete     = Contenu::selectOneById('10');
$metadon    = Contenu::selectOneById('11');
$pied       = Contenu::selectOneById('4');
if (empty($_FILES['logo']['name'])) {} else {
        $logo           = $_FILES['logo']['name'];
        $fichier        = $_FILES['logo']['tmp_name'];
        $ext0           = pathinfo($logo, PATHINFO_EXTENSION);
        $ext            = strtolower($ext0);
        $uploadfile     = '../ressources/commun/' . $entete->getId() . '.webp';
        $dimension      = getimagesize($fichier);
        $largeur        = $dimension[0];
        $hauteur        = $dimension[1];
        $largmax        = 250;
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
                $image          = imagecreatefromwebp($fichier);
                $nouvelle       = imagecreatetruecolor($newlar, $newhau);
                ImageColorTransparent($nouvelle, ImageColorAllocate($nouvelle, 0, 0, 0));
                ImageAlphaBlending($nouvelle, false);
                imagecopyresampled($nouvelle, $image, 0, 0, 0, 0, $newlar, $newhau, $largeur, $hauteur);
            }
            imagewebp($nouvelle, $uploadfile, 100);
            imagedestroy($nouvelle);
        }
}
if(isset($_POST['id'])){
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
    // --------------------------------------------------------------------------------------------------------------------- REDIRECTION VERS LA PAGE
    echo "<script type='text/javascript'>window.location='admin-page5';</script>";
}

include('../vue/admin5.php');
