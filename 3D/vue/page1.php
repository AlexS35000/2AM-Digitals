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
    <link rel="stylesheet" href="../ressources/css/css.min.css">
    <link rel="icon" href="../ressources/commun/<?php echo $entete->getId(); ?>.webp" />
</head>
<!---------------------------------------------------------------- BODY - CONTENU DU SITE ---------------------------------------------------------------->
<body>
    <!---------------------------------------------------------------- MENU DE NAVIGATION ---------------------------------------------------------------->
    <div id="menu" class="menu" style="<?php echo $me; ?>">
        <a href="accueil" aria-label="Retour à l'accueil" title="Accueil">
            <li></li><!-- <img class="icon_nav" src="../ressources/icones/home.png" alt="Accueil du site"> -->
        </a>
        <a href="#s1" aria-label="Allez à la section <?php echo $section1->getTit(); ?>" title="<?php echo $section1->getTit(); ?>">
            <li></li><!-- <img class=" icon_nav" src="../ressources/icones/map.png" alt="Ancre <?php echo $section1->getTit(); ?>"> -->
        </a>
        <a href="#s2" aria-label="Allez à la section <?php echo $section2->getTit(); ?>" title="<?php echo $section2->getTit(); ?>">
            <li></li> <!-- <img class=" icon_nav" src="../ressources/icones/computer.png" alt="Ancre <?php echo $section2->getTit(); ?>"> -->
        </a>
        <a href="#s3" aria-label="Allez à la section <?php echo $section3->getTit(); ?>" title="<?php echo $section3->getTit(); ?>">
            <li></li><!-- <img class=" icon_nav" src="../ressources/icones/gear.png" alt="Ancre <?php echo $section3->getTit(); ?>"> -->
        </a>
        <a href="#s4" aria-label="Allez à la section contactez-nous" title="Contactez-nous">
            <li></li><!-- <img class=" icon_nav" src="../ressources/icones/mail.png" alt="Contact"> -->
        </a>
    </div>
    <!---------------------------------------------------------------- BANDEAU ---------------------------------------------------------------->
    <div id="top" class="bandeau" >
        <div class="col-bandeau" style="<?php echo $c1;?>">
        <div class="text-bandeau">
            <h1 style="<?php echo $bd1?>"><?php echo $entete->getTit(); ?></h1>
            <h2 style="<?php echo $bd2?>"><?php echo $entete->getTex(); ?></h2>
        </div>
            
        </div>
        <div class="img-bandeau" style="<?php echo $bi;?>">
            <a href="#s1">
                <svg fill="#fff" width="60px" height="80px" viewBox="0 0 1920 1920" xmlns="http://www.w3.org/2000/svg">
                    <path d="M849.973.011v1497.931L486.9 1134.871 331 1290.772 960.228 1920l629.228-629.228-155.901-155.901-363.071 363.071V.011z" fill-rule="evenodd"/>
                </svg>
            </a>
        </div>

    </div>
    <div class="section1" style="<?php echo $de;?>">
        <!---------------------------------------------------------------- SECTION 1 ---------------------------------------------------------------->
        <div id="s1" class="section2" >
            <div class="section3" style="<?php echo $f1;?>">
                <h2 style="<?php echo $s11; ?>"><?php echo $section1->getTit(); ?></h2>
                <img src="../ressources/images/<?php echo $section1->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section1->getTit(); ?>">
            </div>
            <div class="section5">
                <img src="../ressources/images/<?php echo $section1->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section1->getTit(); ?>">
                <span style="<?php echo $s12; ?>"><?php echo $section1->getTex(); ?></span>
            </div>
        </div>
        <!---------------------------------------------------------------- SECTION 2 ---------------------------------------------------------------->
        <div id="s2" class="section2-1" >
            <div class="section3">
                <img src="../ressources/images/<?php echo $section2->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section2->getTit(); ?>">
                <span style="<?php echo $s22; ?>"><?php echo $section2->getTex(); ?></span>
            </div>
            <div class="section5" style="<?php echo $f2;?>">
                <h2 style="<?php echo $s21; ?>"><?php echo $section2->getTit(); ?></h2>
                <img src="../ressources/images/<?php echo $section2->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section2->getTit(); ?>">

            </div>
        </div>
        <!---------------------------------------------------------------- SECTION 3 ---------------------------------------------------------------->
        <div id="s3" class="section2">
            <div class="section3"  style="<?php echo $f3;?>;">
                <h2 style="<?php echo $s31; ?>"><?php echo $section3->getTit(); ?></h2>
                <img src="../ressources/images/<?php echo $section3->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section3->getTit(); ?>">
            </div>
            <div class="section5">
                <img src="../ressources/images/<?php echo $section3->getId(); ?>.webp" class="img_sec" alt="Illustration <?php echo $section3->getTit(); ?>">
                <span style="<?php echo $s32; ?>"><?php echo $section3->getTex(); ?></span>
            </div>
        </div>
        <!---------------------------------------------------------------- SECTION 4 ---------------------------------------------------------------->
        <div id="s4" class="section2-1" style="<?php echo $f4;?>">
            <div class="section4">
                <!-- <img src="../ressources/commun/<?php echo $entete->getId(); ?>.webp" class="animated-logo2" alt="Logo <?php echo $section1->getTit(); ?>"> -->
                <p style="<?php echo $s42; ?>">
                    <?php echo $entete->getTit(); ?><br>
                    <?php echo nl2br($pied->getTex()); ?>
                </p>
                <div class="nav_foot" style="color: <?php echo $section2->getCol4(); ?>;" onclick="window.open('<?php echo $pied->getCol1() ?>', '_blank')">
                    <img src="../ressources/icones/google.webp" class="icon_nav2" alt="Nos avis Google">Nos avis Google
                </div>
                <div class="nav_foot" style="color: <?php echo $section2->getCol4(); ?>;" onclick="window.open('<?php echo $pied->getCol2() ?>', '_blank')">
                    <img src="../ressources/icones/facebook.webp" class="icon_nav2" alt="Suivez-nous sur Facebook">Suivez-nous sur Facebook
                </div>
                <div class="nav_foot" style="color: <?php echo $section2->getCol4(); ?>;" onclick="window.open('<?php echo $pied->getCol3() ?>', '_blank')">
                    <img src="../ressources/icones/instagram.webp" class="icon_nav2" alt="Suivez-nous sur Instagram">Suivez-nous sur Instagram
                </div>
                <div class="nav_foot" style="color: <?php echo $section2->getCol4(); ?>;" onclick="window.open('<?php echo $pied->getCol4() ?>', '_blank')">
                    <img src="../ressources/icones/linkedin.webp" class="icon_nav2" alt="Suivez-nous sur Linkedin">Suivez-nous sur Linkedin
                </div>
                <div class="nav_foot" style="color: <?php echo $section2->getCol4(); ?>;" onclick="window.open('<?php echo $pied->getTit() ?>', '_blank')">
                    <img src="../ressources/icones/maps.webp" class="icon_nav2" alt="Nous situer">Nous situer
                </div>
                <div class="nav_foot" style="color: <?php echo $section2->getCol4(); ?>;" onclick="window.open('page3.php')">
                    <img src="../ressources/icones/mentions.webp" class="icon_nav2" alt="Nos mentions légales">Nos mentions légales
                </div>
                <p style="<?php echo $s43; ?>">
                    Ce site à été conçu en respectant une éthique environnementale :<br>
                    il consomme 1.88 cl d'eau et émet 1.25 gCO2
                </p>
                <p style="<?php echo $s43; ?>">
                    Une conception AM DIGITAL <?php echo date('Y') ?>
                </p>
            </div>
            <div class="section4">
                <form method="post" action="page2.php" enctype="multipart/form-data">
                    <h2 style="<?php echo $s41; ?>">Contactez-nous</h2>
                    <label style='display:none'>Remarque</label>
                    <input name="remarque" type="text" placeholder="Saisissez votre remarque" style='display:none'>

                    <input required type="text" name="nom" class="input_mail" placeholder="Nom et prénom" aria-label="Nom et prénom">
                    <input required type="tel" name="tel" class="input_mail" placeholder="N° de téléphone" aria-label="N° de téléphone" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" title="téléphone invalide">
                    
                    <input required type="text" name="ent" class="input_mail" style="width:100%" placeholder="Entreprise" aria-label="Entreprise">
                    <input required type="email" name="mel" class="input_mail" style="width:100%" placeholder="Adresse e-mail" aria-label="Adresse e-mail" pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="Adresse email invalide">
                    <textarea required name="mes" class="input_mail" style="width:100%" rows="5" placeholder="Votre message" aria-label="Votre message" ></textarea>
                    <button type="submit" class="buttonmail" aria-label="Valider">Envoyer votre message</button>
                </form>
            </div>
        </div>
    </div>
    <!---------------------------------------------------------------- PIED DE PAGE ---------------------------------------------------------------->
</body>
</html>