<!doctype html>
<html lang="fr">
<!---------------------------------------------------------------- HEAD - BALISE META ---------------------------------------------------------------->
<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo $metadon->getCol1(); ?>">
  <meta name="keywords" content="<?php echo $metadon->getCol2(); ?>">
  <meta name="author" content="<?php echo $entete->getTit(); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title><?php echo $entete->getTit(); ?> - <?php echo $entete->getTex(); ?></title>
  <meta http-equiv="refresh" content="5;URL=page1.php">
  <link rel="stylesheet" href="../ressources/css/css2.css">
</head> 
<!---------------------------------------------------------------- BODY - CONTENU DU SITE ---------------------------------------------------------------->
<body>
<div class="container">
        <div class="ring"></div>
        <div class="ring"></div>
        <div class="ring"></div>
        <p><?php echo $retour?> ...</p>
    </div>
</body>
</html>