<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 17/10/2016
 * Time: 14:56
 */
session_start();
require_once ('../model/autoload.php');
include_once('../model/MgtConnection.php');


$login= base64_encode($_POST['login']);
$motDePasse= base64_encode($_POST['password']);

$nb = new Administrateur();
$nb=  Administrateur::getNbByLoginMdp($login,$motDePasse);
if($nb->getNb()>0){
/**  redirection vers admin accueil **/
   $_SESSION['connecte']='ok';
    echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="admin-page1"
</SCRIPT>';
}
else {
    $_SESSION['erreur']=1;
    /**  redirection vers admin login **/
    echo '<SCRIPT LANGUAGE="JavaScript">
document.location.href="admin-login"
</SCRIPT>';
}