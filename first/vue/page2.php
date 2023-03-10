<!doctype html>
<html lang="fr">
<!---------------------------------------------------------------- HEAD - BALISE META ---------------------------------------------------------------->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $meta_des; ?>">
    <meta name="keywords" content="<?php echo $meta_key; ?>">
    <meta name="author" content="<?php echo $meta_aut; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
    <meta http-equiv="Expires" content="0" />
    <title><?php echo $meta_tit; ?></title>
    <link rel="stylesheet" href="../ressources/css/css.css">
    <link rel="icon" href="../ressources/commun/<?php echo $entete->getId(); ?>.webp" />
</head>
<!---------------------------------------------------------------- BODY - CONTENU DU SITE ---------------------------------------------------------------->
<body>
<!---------------------------------------------------------------- HEADER ---------------------------------------------------------------->
<?php include('../inc/header.php'); ?>
<!---------------------------------------------------------------- BANDEAU ---------------------------------------------------------------->
    <section id="top" class="bandeau">
        <div class="video_animated" style="<?php echo $rgba?>">            
        <div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        </div>
        <div class="video_animated3">
            <img src="../ressources/commun/<?php echo $entete->getId(); ?>.webp" class="animated-logo" alt="Logo <?php echo $section1->getTit(); ?>">
            <h1 style="<?php echo $bd1?>"><?php echo $entete->getTit(); ?></h1>
            <h2 style="<?php echo $bd2?>"><?php echo $section1->getTit(); ?></h2>
        </div>
    </section>
<section class="section1" style="<?php echo $de;?>">
<!---------------------------------------------------------------- SECTION 1 ---------------------------------------------------------------->
    <div id="s1" class="section2" style="<?php echo $f1;?>">
        <div class="section3">
            <h2 style="<?php echo $s11; ?>"><?php echo $section1->getTit(); ?></h2>
            <span style="<?php echo $s12; ?>"><?php echo $section1->getTex(); ?></span>
        </div>
        <div class="section3">
            <img src="../ressources/images/<?php echo $section1->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section1->getTit(); ?>">
        </div>
    </div>
<!---------------------------------------------------------------- SECTION 2 ---------------------------------------------------------------->
    <div id="s1" class="section2" style="<?php echo $f2;?>">
        <div class="section3">
            <img src="../ressources/images/<?php echo $section2->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section1->getTit(); ?>">
        </div>
        <div class="section3">
            <h2 style="<?php echo $s21; ?>"><?php echo $section2->getTit(); ?></h2>
            <span style="<?php echo $s22; ?>"><?php echo $section2->getTex(); ?></span>
        </div>
    </div>
<!---------------------------------------------------------------- SECTION 3 ---------------------------------------------------------------->
    <div id="s1" class="section2" style="<?php echo $f3;?>">
        <div class="section3">
            <h2 style="<?php echo $s31; ?>"><?php echo $section3->getTit(); ?></h2>
            <span style="<?php echo $s32; ?>"><?php echo $section3->getTex(); ?></span>
        </div>
        <div class="section3">
            <img src="../ressources/images/<?php echo $section3->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section1->getTit(); ?>">
        </div>
    </div>
<!---------------------------------------------------------------- SECTION 4 ---------------------------------------------------------------->
    <div id="s1" class="section2" style="<?php echo $f4;?>">
        <div class="section3">
            <img src="../ressources/images/<?php echo $section4->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section1->getTit(); ?>">
        </div>
        <div class="section3">
            <h2 style="<?php echo $s41; ?>"><?php echo $section4->getTit(); ?></h2>
            <span style="<?php echo $s42; ?>"><?php echo $section4->getTex(); ?></span>
        </div>
    </div>
<?php include('../inc/footer.php'); ?>
</section>
</body>
</html>