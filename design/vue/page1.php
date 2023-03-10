<!doctype html>
<html lang="fr">
<!---------------------------------------------------------------- HEAD - BALISE META ---------------------------------------------------------------->
<head>
    <meta charset="UTF-8">
    <meta name="description" content="<?php echo $meta_des; ?>">
    <meta name="keywords" content="<?php echo $meta_key; ?>">
    <meta name="author" content="<?php echo $meta_aut; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $meta_tit; ?></title>
    <link rel="stylesheet" href="../ressources/css/css.css">
    <link rel="icon" href="../ressources/commun/<?php echo $entete->getId(); ?>.webp" />
</head>
<!---------------------------------------------------------------- BODY - CONTENU DU SITE ---------------------------------------------------------------->
<body>
    <!---------------------------------------------------------------- MENU DE NAVIGATION ---------------------------------------------------------------->
    <div id="menu" class="menu" style="<?php echo $me; ?>">
        <a href="accueil" aria-label="Retour à l'accueil" title="Accueil">
            <img class="icon_nav" src="../ressources/icones/home.webp" alt="Accueil du site">
        </a>
        <a href="#s1" aria-label="Allez à la section <?php echo $section1->getTit(); ?>" title="<?php echo $section1->getTit(); ?>">
            <img class=" icon_nav" src="../ressources/icones/societe.webp" alt="Ancre <?php echo $section1->getTit(); ?>">
        </a>
        <a href="#s2" aria-label="Allez à la section <?php echo $section2->getTit(); ?>" title="<?php echo $section2->getTit(); ?>">
            <img class=" icon_nav" src="../ressources/icones/site.webp" alt="Ancre <?php echo $section2->getTit(); ?>">
        </a>
        <a href="#s3" aria-label="Allez à la section <?php echo $section3->getTit(); ?>" title="<?php echo $section3->getTit(); ?>">
            <img class=" icon_nav" src="../ressources/icones/logiciel.webp" alt="Ancre <?php echo $section3->getTit(); ?>">
        </a>
        <a href="#s4" aria-label="Allez à la section contactez-nous" title="Contactez-nous">
            <img class=" icon_nav" src="../ressources/icones/contact.webp" alt="Contact">
        </a>
    </div>
    <!---------------------------------------------------------------- BANDEAU ---------------------------------------------------------------->
    <div id="top" class="bandeau">
        <div class="video_animated"> 
        <img src="../ressources/bandeau/fond.webp" class="animated-logo" alt="image de fond <?php echo $section1->getTit(); ?>"> 
        <div class="anim-wave">
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
        </div>
        </div>
        <div class="video_animated3">
            <h1 style="<?php echo $bd1?>"><?php echo $entete->getTit(); ?></h1>
            <h2 style="<?php echo $bd2?>"><?php echo $entete->getTex(); ?></h2>
        </div>
    </div>
    <div class="section1">
        <!---------------------------------------------------------------- SECTION 1 ---------------------------------------------------------------->
        <div id="s1" class="section2" style="<?php echo $f1;?>">
            <div class="section3">
                <h2 style="<?php echo $s11; ?>"><?php echo $section1->getTit(); ?></h2>
                <span style="<?php echo $s12; ?>"><?php echo $section1->getTex(); ?></span>
            </div>
            <div class="section5">
                <img src="../ressources/images/<?php echo $section1->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section1->getTit(); ?>">
            </div>
        </div>
        <!---------------------------------------------------------------- SECTION 2 ---------------------------------------------------------------->
        <div id="s2" class="section2-1" style="<?php echo $f2;?>">
            <div class="section5-1">
                <img src="../ressources/images/<?php echo $section2->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section2->getTit(); ?>">
            </div>
            <div class="section3">
                <h2 style="<?php echo $s21; ?>"><?php echo $section2->getTit(); ?></h2>
                <span style="<?php echo $s22; ?>"><?php echo $section2->getTex(); ?></span>
            </div>
        </div>
        <!---------------------------------------------------------------- SECTION 3 ---------------------------------------------------------------->
        <div id="s3" class="section2" style="<?php echo $f3;?>">
            <div class="section3">
                <h2 style="<?php echo $s31; ?>"><?php echo $section3->getTit(); ?></h2>
                <span style="<?php echo $s32; ?>"><?php echo $section3->getTex(); ?></span>
            </div>
            <div class="section5">
                <img src="../ressources/images/<?php echo $section3->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section3->getTit(); ?>">
            </div>
        </div>
        <!---------------------------------------------------------------- SECTION 4 ---------------------------------------------------------------->
        <div id="s4" class="section2-1" style="<?php echo $de;?>">
            <div class="section4">
                <img src="../ressources/commun/<?php echo $entete->getId(); ?>.webp" class="animated-logo2" alt="Logo <?php echo $section1->getTit(); ?>">
                <p style="<?php echo $bd2; ?>">
                    <?php echo $entete->getTit(); ?><br>
                    <?php echo nl2br($pied->getTex()); ?>
                </p>
                <div class="nav_foot" style="<?php echo $bd2; ?>" onclick="window.open('<?php echo $pied->getCol1() ?>', '_blank')">
                    <img src="../ressources/icones/google.webp" class="icon_nav2" alt="Nos avis Google"> Nos avis Google
                </div>
                <div class="nav_foot" style="<?php echo $bd2; ?>;" onclick="window.open('<?php echo $pied->getCol2() ?>', '_blank')">
                    <img src="../ressources/icones/facebook.webp" class="icon_nav2" alt="Suivez-nous sur Facebook">Suivez-nous sur Facebook
                </div>
                <div class="nav_foot" style="<?php echo $bd2; ?>" onclick="window.open('<?php echo $pied->getCol3() ?>', '_blank')">
                    <img src="../ressources/icones/instagram.webp" class="icon_nav2" alt="Suivez-nous sur Instagram">Suivez-nous sur Instagram
                </div>
                <div class="nav_foot" style="<?php echo $bd2; ?>" onclick="window.open('<?php echo $pied->getCol4() ?>', '_blank')">
                    <img src="../ressources/icones/linkedin.webp" class="icon_nav2" alt="Suivez-nous sur Linkedin">Suivez-nous sur Linkedin
                </div>
                <div class="nav_foot" style="<?php echo $bd2; ?>" onclick="window.open('<?php echo $pied->getTit() ?>', '_blank')">
                    <img src="../ressources/icones/maps.webp" class="icon_nav2" alt="Nous situer">Nous situer
                </div>
                <div class="nav_foot" style="<?php echo $bd2; ?>" onclick="window.open('page3.php')">
                    <img src="../ressources/icones/mentions.webp" class="icon_nav2" alt="Nos mentions légales">Nos mentions légales
                </div>
                <p style="<?php echo $bd2; ?>;font-size:10px; padding-top:5px;">
                    Ce site à été conçu en respectant une éthique environnementale :<br>
                    il consomme 1.88 cl d'eau et émet 1.25 gCO2
                </p>
                <p style="<?php echo $bd2; ?>;font-size:10px; padding-top:5px;">
                    Une conception AM DIGITAL <?php echo date('Y') ?>
                </p>
            </div>
            <div class="section4">
                <form method="post" action="page2.php" enctype="multipart/form-data">
                    <h2 style="<?php echo $bd1; ?>">Contactez-nous</h2>
                    <label style='display:none'>Remarque</label>
                    <input name="remarque" type="text" placeholder="Saisissez votre remarque" style='display:none'>
                    <label style="<?php echo $bd2; ?>">Votre nom et prénom</label>
                    <input required type="text" name="nom" class="input_mail" placeholder="Votre nom et prénom" aria-label="Votre nom et prénom">
                    <label style="<?php echo $bd2; ?>">Votre entreprise</label>
                    <input required type="text" name="ent" class="input_mail" placeholder="Votre entreprise" aria-label="Votre entreprise">
                    <label style="<?php echo $bd2; ?>">Votre n° de téléphone</label>
                    <input required type="tel" name="tel" class="input_mail" placeholder="Votre n° de téléphone" aria-label="Votre n° de téléphone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" title="téléphone invalide">
                    <label style="<?php echo $bd2; ?>">Votre adresse e-mail</label>
                    <input required type="email" name="mel" class="input_mail" placeholder="Votre adresse e-mail" aria-label="Votre adresse e-mail" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Adresse email invalide">
                    <label style="<?php echo $bd2; ?>">Votre message</label>
                    <textarea required name="mes" class="input_mail" rows="8" placeholder="Votre message" aria-label="Votre message"></textarea>
                    <button type="submit" class="buttonmail" aria-label="Valider">Envoyer votre message</button>
                </form>
            </div>
        </div>
    </div>
    <!---------------------------------------------------------------- PIED DE PAGE ---------------------------------------------------------------->
</body>
</html>