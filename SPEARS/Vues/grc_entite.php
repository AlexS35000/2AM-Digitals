<!doctype html>
<html lang="fr">
<!---------------------------------------------------------------- HEAD - BALISE META ---------------------------------------------------------------->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Administration des entités de spear">
    <meta name="author" content="2AM Digitals">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
    <meta http-equiv="Expires" content="0" />
    <title>SPEAR Gestion des entités</title>
    <link rel="stylesheet" href="../Assets/Css/css.css">
    <link rel="icon" href="../Assets/Pics/favicon.webp" />
</head>
<!---------------------------------------------------------------- BODY - CONTENU DU SITE ---------------------------------------------------------------->
<body style="margin: 0; padding:0">
<!---------------------------------------------------------------- Menu de navigation ---------------------------------------------------------------->
<?php include('../Incs/head.php');?>
<!---------------------------------------------------------------- Conteneur principal ---------------------------------------------------------------->
<div class="contain">
<!---------------------------------------------------------------- Conteneur Action ---------------------------------------------------------------->
<div class="contain2">
    <form method="post" action="gestion-entreprise">
        <input type="hidden" name="action" value="nouveau">
        <button class="bloc" type="submit">Ajouter</button>
    </form>
    <form method="post" action="gestion-entreprise">
        <input type="hidden" name="action" value="liste">
        <button class="bloc" type="submit">Consulter</button>
    </form>
    <form method="post" action="gestion-entreprise">
        <input type="hidden" name="action" value="Export">
        <button class="bloc" type="submit">Exporter</button>
    </form>
</div>
<!---------------------------------------------------------------- Affichage ---------------------------------------------------------------->
<div class="contain3">
    <?php if ($_POST['action']=="nouveau"){ 
        include('../Assets/Php/ajt_ent.php');
     } elseif ($_POST['action']=="Export"){  
        include('../Assets/Php/exp_ent.php');
     } else {  
        include('../Assets/Php/lis_ent.php');
     } ?>
</div>
</div>
<!---------------------------------------------------------------- ICON FONT AWSOME ---------------------------------------------------------------->
<script src="https://kit.fontawesome.com/df13275a59.js" crossorigin="anonymous"></script>
</body>
</html>