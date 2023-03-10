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
      <div class="section3-1"><a href="#s1">Section 1</a></div>
      <div class="section3-1"><a href="#s2">Section 2</a></div>
      <div class="section3-1"><a href="#s3">Section 3</a></div>
      <div class="section3-1"><a href="#s4">Section 4</a></div>
</div>
<div style="background: linear-gradient(45deg, <?php echo $entete->getCol1(); ?> 50%, <?php echo $entete->getCol2(); ?> 75%, <?php echo $entete->getCol1(); ?> 100%);">
<!---------------------------------------------------------------- SECTION 1 ---------------------------------------------------------------->
<form id="s1" method="post" action="admin-page2" enctype="multipart/form-data" class="section0-1">
  <input type="hidden" name="id" value="<?php echo $section1->getId();?>">
  <input type="hidden" name="col5" value="">
  <input type="hidden" name="col2" value="">
<div class="section2-2">
      <div class="section3-1">
        <h1>Section 1</h1>
      </div>
</div>
    <div class="section2-2">
      <div class="section3-1">
        <label>Fond</label>
        <input type="color" name="col1" value="<?php echo $section1->getCol1();?>">
      </div>
      <div class="section3-1">
        <label>Titre</label>
        <input type="color" name="col3" value="<?php echo $section1->getCol3();?>">
      </div>
      <div class="section3-1">
        <label>Texte</label>
        <input type="color" name="col4" value="<?php echo $section1->getCol4();?>">
      </div>
    </div>
    <div class="section2-2">
      <div class="section3-1">
        <label>Image (cliquez sur l'image pour la modifier)</label>
        <input type="file" id="file_logo" name="logo" style="display: none" accept=".jpg,.jpeg,.png,.gif,.webp">
        <label for="file_logo"><img src ="../ressources/images/<?php echo $section1->getId();?>.webp?v=<?php echo date('ymdhis')?>" class="log_admin"></label>
      </div>
      <div class="section3-1">
        <label>Titre</label>
        <input type="text" name="tit" value="<?php echo $section1->getTit()?>" class="input_admin">
      </div>
      <div class="section3-1">
        <label>Texte</label>
        <textarea name="tex" class="input_admin"><?php echo $section1->getTex()?></textarea>
      </div>
    </div>
    <div class="section2-2">
      <div class="section3-1">
      <button type="submit" class="buttonadmin" aria-label="Valider">Modifier</button>
      </div>
    </div>
    </form>
<!---------------------------------------------------------------- SECTION 2 ---------------------------------------------------------------->
<form id="s2" method="post" action="admin-page2" enctype="multipart/form-data" class="section0-1">
  <input type="hidden" name="id" value="<?php echo $section2->getId();?>">
  <input type="hidden" name="col5" value="">
  <input type="hidden" name="col2" value="">
<div class="section2-2">
      <div class="section3-1">
        <h1>Section 2 <?php echo $section2->getId();?></h1>
      </div>
</div>
    <div class="section2-2">
      <div class="section3-1">
        <label>Fond</label>
        <input type="color" name="col1" value="<?php echo $section2->getCol1();?>">
      </div>
      <div class="section3-1">
        <label>Titre</label>
        <input type="color" name="col3" value="<?php echo $section2->getCol3();?>">
      </div>
      <div class="section3-1">
        <label>Texte</label>
        <input type="color" name="col4" value="<?php echo $section2->getCol4();?>">
      </div>
    </div>
    <div class="section2-2">
      <div class="section3-1">
        <label>Image (cliquez sur l'image pour la modifier)</label>
        <input type="file" id="file_logo1" name="logo" style="display: none" accept=".jpg,.jpeg,.png,.gif,.webp">
        <label for="file_logo1"><img src ="../ressources/images/<?php echo $section2->getId();?>.webp?v=<?php echo date('ymdhis')?>" class="log_admin"></label>
      </div>
      <div class="section3-1">
        <label>Titre</label>
        <input type="text" name="tit" value="<?php echo $section2->getTit()?>" class="input_admin">
      </div>
      <div class="section3-1">
        <label>Texte</label>
        <textarea name="tex" class="input_admin"><?php echo $section2->getTex()?></textarea>
      </div>
    </div>
    <div class="section2-2">
      <div class="section3-1">
      <button type="submit" class="buttonadmin" aria-label="Valider">Modifier</button>
      </div>
    </div>
</form>
<!---------------------------------------------------------------- SECTION 3 ---------------------------------------------------------------->
<form id="s3" method="post" action="admin-page2" enctype="multipart/form-data" class="section0-1">
  <input type="hidden" name="id" value="<?php echo $section3->getId();?>">
  <input type="hidden" name="col5" value="">
  <input type="hidden" name="col2" value="">
<div class="section2-2">
      <div class="section3-1">
        <h1>Section 3</h1>
      </div>
</div>
    <div class="section2-2">
      <div class="section3-1">
        <label>Fond</label>
        <input type="color" name="col1" value="<?php echo $section3->getCol1();?>">
      </div>
      <div class="section3-1">
        <label>Titre</label>
        <input type="color" name="col3" value="<?php echo $section3->getCol3();?>">
      </div>
      <div class="section3-1">
        <label>Texte</label>
        <input type="color" name="col4" value="<?php echo $section3->getCol4();?>">
      </div>
    </div>
    <div class="section2-2">
      <div class="section3-1">
        <label>Image (cliquez sur l'image pour la modifier)</label>
        <input type="file" id="file_logo2" name="logo" style="display: none" accept=".jpg,.jpeg,.png,.gif,.webp">
        <label for="file_logo2"><img src ="../ressources/images/<?php echo $section3->getId();?>.webp?v=<?php echo date('ymdhis')?>" class="log_admin"><br>clic</label>
      </div>
      <div class="section3-1">
        <label>Titre</label>
        <input type="text" name="tit" value="<?php echo $section3->getTit()?>" class="input_admin">
      </div>
      <div class="section3-1">
        <label>Texte</label>
        <textarea name="tex" class="input_admin"><?php echo $section3->getTex()?></textarea>
      </div>
    </div>
    <div class="section2-2">
      <div class="section3-1">
      <button type="submit" class="buttonadmin" aria-label="Valider">Modifier</button>
      </div>
    </div>
    </form>
<!---------------------------------------------------------------- SECTION 4 ---------------------------------------------------------------->
<form id="s4" method="post" action="admin-page2" enctype="multipart/form-data" class="section0-1">
  <input type="hidden" name="id" value="<?php echo $section4->getId();?>">
  <input type="hidden" name="col5" value="">
  <input type="hidden" name="col2" value="">
<div class="section2-2">
      <div class="section3-1">
        <h1>Section 4</h1>
      </div>
</div>
    <div class="section2-2">
      <div class="section3-1">
        <label>Fond</label>
        <input type="color" name="col1" value="<?php echo $section4->getCol1();?>">
      </div>
      <div class="section3-1">
        <label>Titre</label>
        <input type="color" name="col3" value="<?php echo $section4->getCol3();?>">
      </div>
      <div class="section3-1">
        <label>Texte</label>
        <input type="color" name="col4" value="<?php echo $section4->getCol4();?>">
      </div>
    </div>
    <div class="section2-2">
      <div class="section3-1">
        <label>Image (cliquez sur l'image pour la modifier)</label>
        <input type="file" id="file_logo3" name="logo" style="display: none" accept=".jpg,.jpeg,.png,.gif,.webp">
        <label for="file_logo3"><img src ="../ressources/images/<?php echo $section4->getId();?>.webp?v=<?php echo date('ymdhis')?>" class="log_admin"></label>
      </div>
      <div class="section3-1">
        <label>Titre</label>
        <input type="text" name="tit" value="<?php echo $section4->getTit()?>" class="input_admin">
      </div>
      <div class="section3-1">
        <label>Texte</label>
        <textarea name="tex" class="input_admin"><?php echo $section4->getTex()?></textarea>
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