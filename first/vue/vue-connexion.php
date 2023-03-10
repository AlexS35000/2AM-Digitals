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
  <title> Connexion - administration</title>
  <link rel="stylesheet" href="../ressources/css/css.css">
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>
</head>

<!---------------------------------------------------------------- BODY - CONTENU DU SITE ---------------------------------------------------------------->
<body>

    <div class="content-connexion">

        <img class="img-connexion" src="../../ressources/commun/10.webp" alt="logo">
        <h1>Connexion</h1>

        
            <div class="form-connexion">
                <form action="admin-cnx" method="post">
                    
                    <?php if($erreur==1){ ?>
                        <label class="alert-danger">Email ou mot de passe incorrect</label>
                        <?php } ?>

                    <input type="text" class="form-input" placeholder="Email" name="login" required autofocus><br>
                    <input type="password" class="form-input" placeholder="Mot de passe" name="password" required><br>

                    <button class="btn-connexion" type="submit">Connexion</button>
                </form>
            </div>
    </div>
</body>
</html>