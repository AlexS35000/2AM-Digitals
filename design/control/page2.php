<?php
// ------------------------------------------------------------------------ Appel des modèles
include('../model/MgtConnection.php');
include('../model/autoload.php');
$entete     = Contenu::selectOneById('10');
$section1   = Contenu::selectOneById('1');
$section2   = Contenu::selectOneById('2');
$section3   = Contenu::selectOneById('3');
$pied       = Contenu::selectOneById('4');
$metadon    = Contenu::selectOneById('11');
//-------------------------------------------------------------------- Variables
$nom    = $_POST['nom'];
$ent    = $_POST['ent'];
$tel    = $_POST['tel'];
$mel    = $_POST['mel'];
$mes    = $_POST['mes'];
$rem    = $_POST['remarque'];
$email  = filter_var($mel, FILTER_SANITIZE_EMAIL);
//-------------------------------------------------------------------- Génération du mail
$to      = $metadon->getCol3();
$subject = 'CONTACT SITE INTERNET';
$message = '
Bonjour,

Vous venez de recevoir un message sur votre site internet :
- Nom : '. $nom. '
- Entreprise : '. $ent. '
- Telephone : '. $tel. '
- E-mail : '. $mel. '

Voici le contenu du message :
'.$mes.'

Bien cordialement,
';
$headers = array(
    'From' => $mel,
    'Reply-To' => $mel,
    'X-Mailer' => 'PHP/' . phpversion()
);
if($rem==''){
//-------------------------------------------------------------------- vérification adresse mail
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
mail($to, $subject, utf8_decode($message), $headers);
$retour = "Message en cours d'envoi";
}
else{
    $retour = " Adresse email invalide";
}
}
else {
    $retour = "Email invalide";
}
// ------------------------------------------------------------------------ Appel de la vue
include('../vue/page2.php');