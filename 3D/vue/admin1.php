<!doctype html>
<html lang="fr">
<!---------------------------------------------------------------- HEAD - BALISE META ---------------------------------------------------------------->

<head>
  <meta charset="UTF-8">
  <meta name="description" content="<?php echo $metadon->getCol1(); ?>">
  <meta name="keywords" content="">
  <meta name="author" content="2AM Digitals">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $entete->getTit(); ?> - administration</title>
  <link rel="stylesheet" href="../ressources/css/css.css">
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
</head>
<!---------------------------------------------------------------- BODY - CONTENU DU SITE ---------------------------------------------------------------->

<body>
  <!---------------------------------------------------------------- MENU ---------------------------------------------------------------->
  <div id="menu" class="menu" style="<?php echo $me; ?>">
  <a href="accueil" aria-label="Retour à l'accueil" title="Accueil">
            <img class="icon_nav" src="../ressources/icones/home.png" alt="Accueil du site">
        </a>
        <a href="#s1" aria-label="Allez à la section <?php echo $section1->getTit(); ?>" title="<?php echo $section1->getTit(); ?>">
            <img class=" icon_nav" src="../ressources/icones/map.png" alt="Ancre <?php echo $section1->getTit(); ?>">
        </a>
        <a href="#s2" aria-label="Allez à la section <?php echo $section2->getTit(); ?>" title="<?php echo $section2->getTit(); ?>">
            <img class=" icon_nav" src="../ressources/icones/computer.png" alt="Ancre <?php echo $section2->getTit(); ?>">
        </a>
        <a href="#s3" aria-label="Allez à la section <?php echo $section3->getTit(); ?>" title="<?php echo $section3->getTit(); ?>">
            <img class=" icon_nav" src="../ressources/icones/gear.png" alt="Ancre <?php echo $section3->getTit(); ?>">
        </a>
        <a href="#s4" aria-label="Allez à la section contactez-nous" title="Contactez-nous">
            <img class=" icon_nav" src="../ressources/icones/mail.png" alt="Contact">
        </a>
    </div>
    <!---------------------------------------------------------------- BANDEAU ---------------------------------------------------------------->
    <div id="top" class="bandeau">
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
            <h2 style="<?php echo $bd2?>"><?php echo $entete->getTex(); ?></h2>
        </div>
    </div>
  <div class="section1" style="background: linear-gradient(45deg, <?php echo $entete->getCol1(); ?> 50%, <?php echo $entete->getCol2(); ?> 75%, <?php echo $entete->getCol1(); ?> 100%);">
    <!---------------------------------------------------------------- SECTION 1 ---------------------------------------------------------------->
    <div id="s0" class="section2">
      <!---------------------------------------------------------------- Personnalisation accueil ---------------------------------------------------------------->
      <div class="section-admin" style="background-color: <?php echo $section1->getCol5(); ?>; z-index:9999;">
        <h2 style="color: <?php echo $entete->getCol3(); ?>">Accueil</h2>
        <form class="form_admin" method="post" action="admin" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $entete->getId(); ?>">
          <input type="hidden" name="couleur">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> Couleur du menu</label>
          <input class="color" type="color" name="col5" value="<?php echo $entete->getCol5(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $entete->getCol3() ?>;">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> Couleur de fond primaire</label>
          <input class="color" type="color" name="col1" value="<?php echo $entete->getCol1(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $entete->getCol3() ?>;">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> Couleur de fond secondaire</label>
          <input class="color" type="color" name="col2" value="<?php echo $entete->getCol2(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $entete->getCol3() ?>;">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> Couleur du titre principal</label>
          <input class="color" type="color" name="col3" value="<?php echo $entete->getCol3(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $entete->getCol3() ?>;">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> Titre principal</label>
          <input class="text" type="text" name="tit" value="<?php echo $entete->getTit(); ?>" style="background-color: <?php echo $entete->getCol1(); ?>; color:<?php echo $entete->getCol3() ?>; border:1px solid <?php echo $entete->getCol3() ?>;">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> Couleur du titre secondaire</label>
          <input class="color" type="color" name="col4" value="<?php echo $entete->getCol4(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $entete->getCol3() ?>;">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> Titre secondaire</label>
          <input class="text" type="text" name="tex" value="<?php echo $entete->getTex(); ?>" style="background-color: <?php echo $entete->getCol2(); ?>; color:<?php echo $entete->getCol4() ?>; border:1px solid <?php echo $entete->getCol3() ?>;">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> Logo (cliquez sur le logo pour le modifier)</label>
          <input id="fileinp" type="file" name="logo" accept=".jpg,.jpeg,.png,.gif" style="display: none;">
          <label for="fileinp"><img src="../ressources/commun/<?php echo $entete->getId(); ?>.webp?date=<?php echo date('YmdHis') ?>" style="width:75px;"></label>
          
          <button type="submit" class="buttonmail" style="margin-bottom: 15px;">Cliquez pour modifier</button>
        </form>
      </div>
      <!---------------------------------------------------------------- Personnalisation meta ---------------------------------------------------------------->
      <div class="section-admin" style="background-color: <?php echo $entete->getCol1(); ?>; z-index:9999;">
        <h2 style="color: <?php echo $entete->getCol3(); ?>">Meta données</h2>
        <form class="form_admin" method="post" action="admin" enctype="multipart/form-data">
          <input type="hidden" name="col4" value="">
          <input type="hidden" name="tit" value="Mentions Légales">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> Description courte (160 caractères max)</label>
          <input class="text" type="text" name="col1" value="<?php echo $metadon->getCol1(); ?>" style="background-color: <?php echo $entete->getCol1(); ?>; color:<?php echo $entete->getCol3() ?>; border:1px solid <?php echo $entete->getCol3() ?>;">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> Mots clés séparés par une virgule</label>
          <input class="text" type="text" name="col2" value="<?php echo $metadon->getCol2(); ?>" style="background-color: <?php echo $entete->getCol1(); ?>; color:<?php echo $entete->getCol3() ?>; border:1px solid <?php echo $entete->getCol3() ?>;">
          <label style="color: <?php echo $entete->getCol3(); ?>;"> E-mail de contact</label>
          <input class="text" type="text" name="col3" value="<?php echo $metadon->getCol3(); ?>" style="background-color: <?php echo $entete->getCol1(); ?>; color:<?php echo $entete->getCol3() ?>; border:1px solid <?php echo $entete->getCol3() ?>;">
          <label style="color: <?php echo $entete->getCol3(); ?>;">Politique de confidentialité</label>
          <textarea class="ckeditor" style="height: auto; width:100%;" name="tex" rows="5"><?php echo $metadon->getTex(); ?></textarea>          
          <button type="submit" class="buttonmail" style="margin-bottom: 15px;">Cliquez pour modifier</button>
        </form>
      </div>

    </div>
    <!---------------------------------------------------------------- SECTION 2 ---------------------------------------------------------------->
    <div id="s1" class="section2">
      <div class="section3" style="background-color: <?php echo $section1->getCol1(); ?>; z-index:9999;">
        <h2 style="color: <?php echo $section1->getCol3(); ?>">Section 1</h2>
        <form class="form_admin" method="post" action="admin" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $section1->getId(); ?>">
          <input type="hidden" name="action">
          <div class="admin_bloc">
            <div class="form_admin_txt">
              <label style="color: <?php echo $section1->getCol4(); ?>;"> Titre principal</label>
              <input class="text" type="text" name="tit" value="<?php echo $section1->getTit(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $section1->getCol3() ?>;">
              <label style="color: <?php echo $section1->getCol4(); ?>;"> Texte</label>
              <textarea class="ckeditor" style="height: auto; width:100%;" name="tex" rows="5" value="<?php echo $section1->getTex(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $section1->getCol3() ?>;"><?php echo $section1->getTex(); ?></textarea>
            </div>
            <div class="form_admin_visuel">
              <div class="form_admin_col">
                <label style="color: <?php echo $section1->getCol4(); ?>;"> Couleur de fond primaire</label>
                <input class="color" type="color" name="col1" value="<?php echo $section1->getCol1(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $section1->getCol3() ?>;">
                <label style="color: <?php echo $section1->getCol4(); ?>;"> Couleur du titre principal</label>
                <input class="color" type="color" name="col3" value="<?php echo $section1->getCol3(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $section1->getCol3() ?>;">
                <label style="color: <?php echo $section1->getCol4(); ?>;"> Couleur du texte</label>
                <input class="color" type="color" name="col4" value="<?php echo $section1->getCol4(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $section1->getCol3() ?>;">
                <label style="color: <?php echo $section1->getCol4(); ?>;"> Image (cliquez sur l'image pour la modifier)</label>
              </div>
              <input id="vignette1" type="file" name="vignette" accept=".jpg,.jpeg,.png,.gif" style="display: none;">
              <label for="vignette1"><img class="vignette" src="../ressources/images/<?php echo $section1->getId(); ?>.webp?date=<?php echo date('YmdHis') ?>"></label>
            </div>
          </div>
          <button type="submit" class="buttonmail" style="margin-bottom: 15px;">Cliquez pour modifier</button>
        </form>
      </div>
    </div>
    <!---------------------------------------------------------------- SECTION 3 ---------------------------------------------------------------->
    <div id="s2" class="section2">
      <div class="section3" style="background-color: <?php echo $section2->getCol1(); ?>; z-index:9999;">
        <h2 style="color: <?php echo $section2->getCol3(); ?>">Section 2</h2>
        <form class="form_admin" method="post" action="admin" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $section2->getId(); ?>">
          <input type="hidden" name="action">
          <div class="admin_bloc">
            <div class="form_admin_txt">
              <label style="color: <?php echo $section2->getCol4(); ?>;"> Titre principal</label>
              <input class="text" type="text" name="tit" value="<?php echo $section2->getTit(); ?>" style="background-color: <?php echo $section2->getCol1(); ?>; color:<?php echo $section2->getCol3() ?>; border:1px solid <?php echo $section2->getCol3() ?>;">
              <label style="color: <?php echo $section2->getCol4(); ?>;"> Texte</label>
              <textarea class="ckeditor" style="height: auto; width:100%;" name="tex" rows="5" value="<?php echo $section2->getTex(); ?>" style="background-color: <?php echo $section2->getCol1(); ?>; color:<?php echo $section2->getCol3() ?>; border:1px solid <?php echo $section2->getCol3() ?>;"><?php echo $section2->getTex(); ?></textarea>
            </div>
            <div class="form_admin_visuel">
              <div class="form_admin_col">
                <label style="color: <?php echo $section2->getCol4(); ?>;"> Couleur de fond primaire</label>
                <input class="color" type="color" name="col1" value="<?php echo $section2->getCol1(); ?>" style="background-color: <?php echo $section2->getCol1(); ?>; color:<?php echo $section2->getCol3() ?>; border:1px solid <?php echo $section2->getCol3() ?>;">
                <label style="color: <?php echo $section2->getCol4(); ?>;"> Couleur du titre principal</label>
                <input class="color" type="color" name="col3" value="<?php echo $section2->getCol3(); ?>" style="background-color: <?php echo $section2->getCol1(); ?>; color:<?php echo $section2->getCol3() ?>; border:1px solid <?php echo $section2->getCol3() ?>;">
                <label style="color: <?php echo $section2->getCol4(); ?>;"> Couleur du texte</label>
                <input class="color" type="color" name="col4" value="<?php echo $section2->getCol4(); ?>" style="background-color: <?php echo $section2->getCol1(); ?>; color:<?php echo $section2->getCol3() ?>; border:1px solid <?php echo $section2->getCol3() ?>;">
                <label style="color: <?php echo $section2->getCol4(); ?>;"> Image (cliquez sur l'image pour la modifier)</label>
              </div>
              <input id="vignette2" type="file" name="vignette" accept=".jpg,.jpeg,.png,.gif" style="display: none;">
              <label for="vignette2"><img class="vignette" src="../ressources/images/<?php echo $section2->getId(); ?>.webp?date=<?php echo date('YmdHis') ?>"></label>
            </div>
          </div>
          <button type="submit" class="buttonmail" style="margin-bottom: 15px;">Cliquez pour modifier</button>
        </form>
      </div>
    </div>
    <!---------------------------------------------------------------- SECTION 4 ---------------------------------------------------------------->
    <div id="s3" class="section2">
      <div class="section3" style="background-color: <?php echo $section3->getCol1(); ?>; z-index:9999;">
        <h2 style="color: <?php echo $section3->getCol3(); ?>">Section 3</h2>
        <form class="form_admin" method="post" action="admin" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $section3->getId(); ?>">
          <input type="hidden" name="action">
          <div class="admin_bloc">
            <div class="form_admin_txt">
              <label style="color: <?php echo $section3->getCol4(); ?>;"> Titre principal</label>
              <input class="text" type="text" name="tit" value="<?php echo $section3->getTit(); ?>" style="background-color: <?php echo $section3->getCol1(); ?>; color:<?php echo $section3->getCol3() ?>; border:1px solid <?php echo $section3->getCol3() ?>;">
              <label style="color: <?php echo $section3->getCol4(); ?>;"> Texte</label>
              <textarea class="ckeditor" style="height: auto; width:100%;" name="tex" rows="5" value="<?php echo $section3->getTex(); ?>" style="background-color: <?php echo $section3->getCol1(); ?>; color:<?php echo $section3->getCol3() ?>; border:1px solid <?php echo $section3->getCol3() ?>;"><?php echo $section3->getTex(); ?></textarea>
            </div>
            <div class="form_admin_visuel">
              <div class="form_admin_col">
                <label style="color: <?php echo $section3->getCol4(); ?>;"> Couleur de fond primaire</label>
                <input class="color" type="color" name="col1" value="<?php echo $section3->getCol1(); ?>" style="background-color: <?php echo $section3->getCol1(); ?>; color:<?php echo $section3->getCol3() ?>; border:1px solid <?php echo $section3->getCol3() ?>;">
                <label style="color: <?php echo $section3->getCol4(); ?>;"> Couleur du titre principal</label>
                <input class="color" type="color" name="col3" value="<?php echo $section3->getCol3(); ?>" style="background-color: <?php echo $section3->getCol1(); ?>; color:<?php echo $section3->getCol3() ?>; border:1px solid <?php echo $section3->getCol3() ?>;">
                <label style="color: <?php echo $section3->getCol4(); ?>;"> Couleur du texte</label>
                <input class="color" type="color" name="col4" value="<?php echo $section3->getCol4(); ?>" style="background-color: <?php echo $section3->getCol1(); ?>; color:<?php echo $section3->getCol3() ?>; border:1px solid <?php echo $section3->getCol3() ?>;">
                <label style="color: <?php echo $section3->getCol4(); ?>;"> Image (cliquez sur l'image pour la modifier)</label>
              </div>
              <input id="vignette3" type="file" name="vignette" accept=".jpg,.jpeg,.png,.gif" style="display: none;">
              <label for="vignette3"><img class="vignette" src="../ressources/images/<?php echo $section3->getId(); ?>.webp?date=<?php echo date('YmdHis') ?>"></label>
            </div>
          </div>
          <button type="submit" class="buttonmail" style="margin-bottom: 15px;">Cliquez pour modifier</button>
        </form>
      </div>
    </div>
    <!---------------------------------------------------------------- FOOTER ---------------------------------------------------------------->
    <div id="s4" class="section2">
      <div class="section3" style="background-color: <?php echo $section1->getCol1(); ?>; z-index:9999;">
        <h2 style="color: <?php echo $section1->getCol3(); ?>">Footer</h2>
        <form class="form_admin" method="post" action="admin" enctype="multipart/form-data">
          <input type="hidden" name="id" value="<?php echo $pied->getId(); ?>">
          <input type="hidden" name="action">
          <label style="color: <?php echo $section3->getCol4(); ?>;"> Coordonnées</label>
          <textarea class="ckeditor" style="height: auto; width:100%;" name="tex" rows="5" value="<?php echo $entete->getTex(); ?>" style="background-color: <?php echo $section3->getCol1(); ?>; color:<?php echo $section3->getCol3() ?>; border:1px solid <?php echo $section3->getCol3() ?>;"><?php echo $pied->getTex(); ?></textarea>
          <label style="color: <?php echo $section1->getCol3(); ?>;"> Lien vers avis Google</label>
          <input class="color" type="text" name="col1" value="<?php echo $pied->getCol1(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $section1->getCol3() ?>;">
          <label style="color: <?php echo $section1->getCol3(); ?>;"> Lien Facebook</label>
          <input class="color" type="text" name="col3" value="<?php echo $pied->getCol2(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $section1->getCol3() ?>;">
          <label style="color: <?php echo $section1->getCol3(); ?>;"> Lien Instagram</label>
          <input class="color" type="text" name="col3" value="<?php echo $pied->getCol3(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $section1->getCol3() ?>;">
          <label style="color: <?php echo $section1->getCol3(); ?>;"> Lien LinkedIn</label>
          <input class="color" type="text" name="col4" value="<?php echo $pied->getCol4(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $section1->getCol3() ?>;">
          <label style="color: <?php echo $section1->getCol3(); ?>;"> Lien Google Maps</label>
          <input class="text" type="text" name="tit" value="<?php echo $pied->getTit(); ?>" style="background-color: <?php echo $section1->getCol1(); ?>; color:<?php echo $section1->getCol3() ?>; border:1px solid <?php echo $section1->getCol3() ?>;">
        
          <button type="submit" class="buttonmail" style="margin-bottom: 15px;">Cliquez pour modifier</button>
        </form>
      </div>
    </div>
    <!---------------------------------------------------------------- FIN D'ADMINISTRATION ---------------------------------------------------------------->
  </div>
</body>

</html>