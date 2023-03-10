<!doctype html>
<html lang="fr">
<!---------------------------------------------------------------- HEAD - BALISE META ---------------------------------------------------------------->

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="2AM Digitals">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="Cache-Control" content="no-cache, must-revalidate" />
    <meta http-equiv="Expires" content="0" />
  <title><?php echo $entete->getTit(); ?> - administration</title>
  <link rel="stylesheet" href="../ressources/css/css.css">
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
</head>
<style>
  .log_admin{
    width: 75px;
  }
  </style>
<!---------------------------------------------------------------- BODY - CONTENU DU SITE ---------------------------------------------------------------->
<body>
<!---------------------------------------------------------------- HEADER ---------------------------------------------------------------->
<?php include('../../inc/header2.php'); ?>
<div class="section2-2" style="position: fixed; top:0; z-index:99999;">
      <div class="section3-1"><a href="#admin_gen">Général</a></div>
      <div class="section3-1"><a href="#admin_met">Meta données</a></div>
      <div class="section3-1"><a href="#admin_pie">Pied de page</a></div>
</div>
<div style="background: linear-gradient(45deg, <?php echo $entete->getCol1(); ?> 50%, <?php echo $entete->getCol2(); ?> 75%, <?php echo $entete->getCol1(); ?> 100%);">
<!---------------------------------------------------------------- SECTION 1 ---------------------------------------------------------------->
<form id="admin_gen" method="post" action="admin-page5" enctype="multipart/form-data" class="section0-1">
  <input type="hidden" name="id" value="<?php echo $entete->getId();?>">
<div class="section2-2">
      <div class="section3-1">
        <h1>Administration générale</h1>
      </div>
</div>
    <div class="section2-2">
      <div class="section3-1">
        <label>Fond primaire</label>
        <input type="color" name="col1" value="<?php echo $entete->getCol1();?>">
      </div>
      <div class="section3-1">
        <label>Fond secondaire</label>
        <input type="color" name="col2" value="<?php echo $entete->getCol2();?>">
      </div>
      <div class="section3-1">
        <label>Titre principal</label>
        <input type="color" name="col3" value="<?php echo $entete->getCol3();?>">
      </div>
      <div class="section3-1">
        <label>Titre secondaire</label>
        <input type="color" name="col4" value="<?php echo $entete->getCol4();?>">
      </div>
      <div class="section3-1">
        <label>Menu</label>
        <input type="color" name="col5" value="<?php echo $entete->getCol5();?>">
      </div>
    </div>
    <div class="section2-2">
      <div class="section3-1">
        <label>Logo (cliquez sur le logo pour le modifier)</label>
        <input type="file" id="file_logo" name="logo" style="display: none" accept=".jpg,.jpeg,.png,.gif,.webp">
        <label for="file_logo"><img src ="../ressources/commun/10.webp?v=<?php echo date('ymdhis')?>" class="log_admin"></label>
      </div>
      <div class="section3-1">
        <label>Titre principal</label>
        <input type="text" name="tit" value="<?php echo $entete->getTit()?>" class="input_admin">
      </div>
      <div class="section3-1">
        <label>Titre secondaire</label>
        <input type="text" name="tex" value="<?php echo $entete->getTex()?>" class="input_admin">
      </div>
    </div>
    <div class="section2-2">
      <div class="section3-1">
      <button type="submit" class="buttonadmin" aria-label="Valider">Modifier</button>
      </div>
    </div>
    </form>
<!---------------------------------------------------------------- SECTION 2 ---------------------------------------------------------------->
<form id="admin_met" method="post" action="admin-page5" enctype="multipart/form-data" class="section0-1">
  <input type="hidden" name="id" value="<?php echo $metadon->getId();?>">
  <input type="hidden" name="col4" value="">
  <input type="hidden" name="col5" value="">
  <input type="hidden" name="tit" value="">
<div class="section2-2">
      <div class="section3-1">
        <h2>Administration Meta données</h2>
      </div>
</div>
<div class="section2-2">
      <div class="section3-1">
        <label>Meta description (160 caractères Max.)</label>
        <input type="text" name="col1" value="<?php echo $metadon->getCol1()?>" class="input_admin">
      </div>
      <div class="section3-1">
        <label>Mots clés (séparer par une ,)</label>
        <input type="text" name="col2" value="<?php echo $metadon->getCol2()?>" class="input_admin">
      </div>
      <div class="section3-1">
        <label>Email de contact</label>
        <input type="text" name="col3" value="<?php echo $metadon->getCol3()?>" class="input_admin">
      </div>
</div>
<div class="section2-2">
      <div class="section3-1">
        <label>Mentions légales</label>
        <textarea class="input_admin" name="tex"><?php echo $metadon->getTex()?></textarea>
      </div>
</div>
    <div class="section2-2">
      <div class="section3-1">
      <button type="submit" class="buttonadmin" aria-label="Valider">Modifier</button>
      </div>
    </div>
</form>

<!---------------------------------------------------------------- SECTION 3 ---------------------------------------------------------------->
<form id="admin_pie" method="post" action="admin-page5" enctype="multipart/form-data" class="section0-1">
  <input type="hidden" name="id" value="<?php echo $pied->getId();?>">
  <input type="hidden" name="col5" value="">
<div class="section2-2">
      <div class="section3-1">
        <h2>Administration pied de page</h2>
      </div>
</div>
<div class="section2-2">
      <div class="section3-1">
        <label>Facebook</label>
        <input type="text" name="col2" value="<?php echo $pied->getCol2()?>" class="input_admin">
      </div>
      <div class="section3-1">
        <label>Instagram</label>
        <input type="text" name="col3" value="<?php echo $pied->getCol3()?>" class="input_admin">
      </div>
      <div class="section3-1">
        <label>Linkedin</label>
        <input type="text" name="col4" value="<?php echo $pied->getCol4()?>" class="input_admin">
      </div>
</div>
<div class="section2-2">
      <div class="section3-1">
        <label>Google MyBusiness</label>
        <input type="text" name="col1" value="<?php echo $pied->getCol1()?>" class="input_admin">
      </div>
      <div class="section3-1">
        <label>Google map</label>
        <input type="text" name="tit" value="<?php echo $pied->getTit()?>" class="input_admin">
      </div>
</div>
<div class="section2-2">
      <div class="section3-1">
        <label>Coordonnées et informations complémentaires</label>
        <textarea class="input_admin" name="tex"><?php echo $pied->getTex()?></textarea>
      </div>
</div>
    <div class="section2-2">
      <div class="section3-1">
      <button type="submit" class="buttonadmin" aria-label="Valider">Modifier</button>
      </div>
    </div>
</form>
    <!---------------------------------------------------------------- FIN D'ADMINISTRATION ---------------------------------------------------------------->
</div>
</body>
</html>