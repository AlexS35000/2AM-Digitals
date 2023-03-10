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
$entete         = Contenu::selectOneById('10');
// ------------------------------------------------------------------------ Insertion Categorie
if(isset($_POST['ins_cat'])){
    // définition des variables
    $cat    = $_POST['cat'];
    $des    = $_POST['des'];
    // lancement du script d'insert
    $INS_cat    = new Categorie();
    $INS_cat    -> setCat($cat);
    $INS_cat    -> setDes($des);
    Categorie::Insert($INS_cat);
    // --------------------------------------------------------------------------------------------------------------------- REDIRECTION VERS LA PAGE
    echo "<script type='text/javascript'>window.location='admin-page4';</script>";
}
// ------------------------------------------------------------------------ MaJ Categorie
if(isset($_POST['maj_cat'])){
    // définition des variables
    $id     = $_POST['id'];
    $cat    = $_POST['cat'];
    $des    = $_POST['des'];
    // lancement du script d'insert
    $INS_cat    = new Categorie();
    $INS_cat    -> setId($id);
    $INS_cat    -> setCat($cat);
    $INS_cat    -> setDes($des);
    Categorie::Update($INS_cat);
    // --------------------------------------------------------------------------------------------------------------------- REDIRECTION VERS LA PAGE
    echo "<script type='text/javascript'>window.location='admin-page4';</script>";
}
// ------------------------------------------------------------------------ DeL Categorie
if(isset($_POST['maj_cat'])){
    // définition des variables
    $id     = $_POST['id'];
    Categorie::Delete($id);
    // --------------------------------------------------------------------------------------------------------------------- REDIRECTION VERS LA PAGE
    echo "<script type='text/javascript'>window.location='admin-page4';</script>";
}
// ------------------------------------------------------------------------ Insertion Fiche
if(isset($_POST['ins_fic'])){
    // définition des variables
    $cat    = $_POST['cat'];
    $tit    = $_POST['tit'];
    $tex    = $_POST['tex'];
    // lancement du script d'insert
    $INS_fic    = new Catalogue();
    $INS_fic    -> setCat($cat);
    $INS_fic    -> setTit($tit);
    $INS_fic    -> setTex($tex);
    Catalogue::Insert($INS_fic);
    // génération de l'id
    $recup_id   = Catalogue::selectMax();
    $id         = $recup_id->getId();
    // lancement du script miniatures
    include('../ressources/php/miniature.php');
    // lancement du script photos
    include('../ressources/php/photos.php');
    // --------------------------------------------------------------------------------------------------------------------- REDIRECTION VERS LA PAGE
    echo "<script type='text/javascript'>window.location='admin-page4';</script>";
}
// ------------------------------------------------------------------------ MaJ Fiche
if(isset($_POST['maj_fic'])){
    // définition des variables
    $id     = $_POST['id'];
    $cat    = $_POST['cat'];
    $tit    = $_POST['tit'];
    $tex    = $_POST['tex'];
    // lancement du script de MaJ
    $MAJ_fic    = new Catalogue();
    $MAJ_fic    -> setId($id);
    $MAJ_fic    -> setCat($cat);
    $MAJ_fic    -> setTit($tit);
    $MAJ_fic    -> setTex($tex);
    Catalogue::Update($MAJ_fic);
    // lancement du script miniatures
    include('../ressources/php/miniature.php');
    // lancement du script photos
    include('../ressources/php/photos.php');
    // --------------------------------------------------------------------------------------------------------------------- REDIRECTION VERS LA PAGE
    echo "<script type='text/javascript'>window.location='admin-page4';</script>";
}
// ------------------------------------------------------------------------ DeL Fiche
if(isset($_POST['del_fic'])){
    // définition des variables
    $id = $_POST['id'];
    // lancement du script
    Catalogue::Delete($id);
    // suppression des miniatures
    unlink('../ressources/catalogue/mini-'.$id.'-1.webp');
    unlink('../ressources/catalogue/mini-'.$id.'-2.webp');
    unlink('../ressources/catalogue/mini-'.$id.'-3.webp');
    unlink('../ressources/catalogue/mini-'.$id.'-4.webp');
    unlink('../ressources/catalogue/mini-'.$id.'-5.webp');
    // suppression des photos
    unlink('../ressources/catalogue/'.$id.'-1.webp');
    unlink('../ressources/catalogue/'.$id.'-2.webp');
    unlink('../ressources/catalogue/'.$id.'-3.webp');
    unlink('../ressources/catalogue/'.$id.'-4.webp');
    unlink('../ressources/catalogue/'.$id.'-5.webp');
    // --------------------------------------------------------------------------------------------------------------------- REDIRECTION VERS LA PAGE
    echo "<script type='text/javascript'>window.location='admin-page4';</script>";
}
$liste_produit    = Catalogue::selectAll();
$liste_categorie  = Categorie::selectAll();
include('../vue/admin4.php');
