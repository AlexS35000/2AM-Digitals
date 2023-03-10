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
      <div class="section3-1"><a href="#s1">Fiche</a></div>
      <div class="section3-1"><a href="#s2">Catégorie</a></div>
</div>
<div style="background: linear-gradient(45deg, <?php echo $entete->getCol1(); ?> 50%, <?php echo $entete->getCol2(); ?> 75%, <?php echo $entete->getCol1(); ?> 100%); min-height:100vh; padding-top:10vh;">
<div class="section2-2">
<!---------------------------------------------------------------- SECTION 1 ---------------------------------------------------------------->
<form id="s1" method="post" action="admin-page3" enctype="multipart/form-data" class="section3-1">
  <textarea class="ckeditor" name="tex"></textarea>
</form>
<!---------------------------------------------------------------- SECTION 3 ---------------------------------------------------------------->
<form id="s2" method="post" action="admin-page3" enctype="multipart/form-data" class="section3-1">
  <textarea class="ckeditor" name="des"></textarea>
</form>
    <!---------------------------------------------------------------- FIN D'ADMINISTRATION ---------------------------------------------------------------->
</div>
</div>
</body>
</html>