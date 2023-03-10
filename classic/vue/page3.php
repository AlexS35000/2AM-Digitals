<!doctype html>
<html lang="fr">
<!---------------------------------------------------------------- HEAD - BALISE META ---------------------------------------------------------------->
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Mentions légales et politique de confidentialité du site <?php echo $entete->getTit(); ?>">
  <meta name="keywords" content="<?php echo $metadon->getCol2(); ?>">
  <meta name="author" content="<?php echo $entete->getTit(); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title><?php echo $entete->getTit(); ?> - Mentions Légales</title>
  <link rel="stylesheet" href="../ressources/css/css.css">
</head>
<!---------------------------------------------------------------- BODY - CONTENU DU SITE ---------------------------------------------------------------->
<body>
<!---------------------------------------------------------------- MENU DE NAVIGATION ---------------------------------------------------------------->
<div id="menu" class="menu" style="background-color: <?php echo $entete->getCol1(); ?>;">
<a href='page1.php'><img class="icon_nav" src="../ressources/icones/home.webp" alt="Accueil du site"></a>
<a href='page1.php#s1'"><img class="icon_nav" src="../ressources/icones/societe.webp" alt="Ancre <?php echo $section1->getTit(); ?>"></a>
<a href='page1.php#s2'"><img class="icon_nav" src="../ressources/icones/site.webp" alt="Ancre <?php echo $section2->getTit(); ?>"></a>
<a href='page1.php#s3'"><img class="icon_nav" src="../ressources/icones/logiciel.webp" alt="Ancre <?php echo $section3->getTit(); ?>"></a>
<a href='page1.php#s4'"><img class="icon_nav" src="../ressources/icones/contact.webp" alt="Contact"></a>
</div>
<!---------------------------------------------------------------- BANDEAU ---------------------------------------------------------------->
<div id="top" class="bandeau">
<img src="../ressources/commun/logo.webp" class="animated-logo" alt="Logo <?php echo $section1->getTit(); ?>">
<h1><?php echo $entete->getTit(); ?></h1>
<h2><?php echo $entete->getTex(); ?></h2>
</div>
<div class="section0" style="background: linear-gradient(45deg, <?php echo $entete->getCol1(); ?> 50%, <?php echo $entete->getCol2(); ?> 75%, <?php echo $entete->getCol1(); ?> 100%);">
<!---------------------------------------------------------------- SECTION 1 ---------------------------------------------------------------->
<div id="s1" class="section2">
<div class="section3" style="background-color: <?php echo $section1->getCol1(); ?>; z-index:9999;">
    <h2 style="color: <?php echo $section1->getCol3(); ?>;"><?php echo $metadon->getTit(); ?></h2>
    <span style="color: <?php echo $section1->getCol4(); ?>;"><?php echo $metadon->getTex(); ?></span>
</div>
</div>
</div>
<!---------------------------------------------------------------- PIED DE PAGE ---------------------------------------------------------------->
</body>
</html>