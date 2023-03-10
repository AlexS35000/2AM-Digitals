    <!---------------------------------------------------------------- PIED DE PAGE ---------------------------------------------------------------->
    <div id="s4" class="section2-1" style="<?php echo $de;?>">
            <div class="section4">
                <img src="../ressources/commun/<?php echo $entete->getId(); ?>.webp" class="animated-logo2" alt="Logo <?php echo $section1->getTit(); ?>">
                <p style="<?php echo $bd2; ?>">
                    <?php echo $entete->getTit(); ?><br>
                    <?php echo nl2br($pied->getTex()); ?>
                </p>
                <div class="nav_foot" style="<?php echo $bd2 ?>;" onclick="window.open('<?php echo $pied->getCol1() ?>', '_blank')">
                <i class="icon_nav2 fa-brands fa-google" title="Nos avis Google"></i> Nos avis Google
                </div>
                <div class="nav_foot" style="<?php echo $bd2 ?>;" onclick="window.open('<?php echo $pied->getCol2() ?>', '_blank')">
                <i class="icon_nav2 fa-brands fa-facebook" title="Suivez-nous sur Facebook"></i> Suivez-nous sur Facebook
                </div>
                <div class="nav_foot" style="<?php echo $bd2 ?>;" onclick="window.open('<?php echo $pied->getCol3() ?>', '_blank')">
                <i class="icon_nav2 fa-brands fa-instagram" title="Suivez-nous sur Instagram"></i> Suivez-nous sur Instagram
                </div>
                <div class="nav_foot" style="<?php echo $bd2 ?>;" onclick="window.open('<?php echo $pied->getCol4() ?>', '_blank')">
                <i class="icon_nav2 fa-brands fa-linkedin-in" title="Suivez-nous sur Linkedin"></i> Suivez-nous sur Linkedin
                </div>
                <div class="nav_foot" style="<?php echo $bd2 ?>;" onclick="window.open('<?php echo $pied->getTit() ?>', '_blank')">
                <i class="icon_nav2 fa-solid fa-location-dot" title="Nous situer"></i> Nous situer
                </div>
                <div class="nav_foot" style="<?php echo $bd2 ?>;" onclick="window.open('page3.php')">
                <i class="icon_nav2 fa-solid fa-scale-balanced" title="Nos mentions légales"></i> Nos mentions légales
                </div>
                <p style="<?php echo $bd2; ?>">
                    Ce site à été conçu en respectant une éthique environnementale :<br>
                    il consomme 1.88 cl d'eau et émet 1.25 gCO2
                </p>
                <p style="<?php echo $bd2; ?>">
                    Une conception AM DIGITAL <?php echo date('Y') ?>
                </p>
            </div>
            <div class="section4">
                <form method="post" action="page2.php" enctype="multipart/form-data">
                    <h2 style="<?php echo $bd2; ?>">Contactez-nous</h2>
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
<script src="https://kit.fontawesome.com/df13275a59.js" crossorigin="anonymous"></script>