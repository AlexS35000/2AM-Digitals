<?php
/**
 * Created VSCODE
 * User: AM DIGITAL
 * Date: 14/02/2023
 */
/*---------------------------------------------------------------- Création de la class -------------------------------------------------------------------*/
class Catalogue
/*---------------------------------------------------------------- Création des variables -------------------------------------------------------------------*/
{
    private $id;
    private $cat;
    private $tit;
    private $tex;
    public function __construct()
    {
    }
    /*---------------------------------------------------------------- Création des getters et setters -------------------------------------------------------------------*/

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */
    public function setId($id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of cat
     */
    public function getCat()
    {
        return $this->cat;
    }

    /**
     * Set the value of cat
     */
    public function setCat($cat): self
    {
        $this->cat = $cat;

        return $this;
    }

    /**
     * Get the value of tit
     */
    public function getTit()
    {
        return $this->tit;
    }

    /**
     * Set the value of tit
     */
    public function setTit($tit): self
    {
        $this->tit = $tit;

        return $this;
    }

    /**
     * Get the value of tex
     */
    public function getTex()
    {
        return $this->tex;
    }

    /**
     * Set the value of tex
     */
    public function setTex($tex): self
    {
        $this->tex = $tex;

        return $this;
    }
    /*---------------------------------------------------------------- REQUETE DE SELECTION MULTIPLE -------------------------------------------------------------------*/
    /**
     * @return Catalogue[]
     */
    public static function selectAll()
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, cat, tit, tex FROM catalogue ORDER BY id desc';
        $prep = $pdo->prepare($query);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new Catalogue();
            $item->setId($obj['id']);
            $item->setCat($obj['cat']);
            $item->setTit($obj['tit']);
            $item->setTex($obj['tex']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }
    /**
     * @param $cat
     * @return Catalogue[]
     */
    public static function selectAllbyCat($cat)
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, cat, tit, tex FROM catalogue WHERE cat=:cat ORDER BY id desc';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':cat', $cat, PDO::PARAM_STR);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new Catalogue();
            $item->setId($obj['id']);
            $item->setCat($obj['cat']);
            $item->setTit($obj['tit']);
            $item->setTex($obj['tex']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }
    /**
     * @param Catalogue $catalogue
     * @return Catalogue[]
     */
    public static function selectAllbyRec(Catalogue $catalogue)
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, cat, tit, tex FROM catalogue WHERE cat LIKE :cat AND ( tit LIKE :tit OR tex LIKE :tex ) ORDER BY id desc';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':cat', '%'.$catalogue->getCat().'%', PDO::PARAM_STR);
        $prep->bindValue(':tit', '%'.$catalogue->getTit().'%', PDO::PARAM_STR);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new Catalogue();
            $item->setId($obj['id']);
            $item->setCat($obj['cat']);
            $item->setTit($obj['tit']);
            $item->setTex($obj['tex']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }
    /*---------------------------------------------------------------- REQUETE DE SELECTION UNIQUE -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return Catalogue|null
     */
    public static function selectOneById($id)
    {
        $item = new Catalogue();
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('SELECT id, cat, tit, tex FROM catalogue WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        if ($data = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
            $item->setId($data['id']);
            $item->setCat($data['cat']);
            $item->setTit($data['tit']);
            $item->setTex($data['tex']);
        } else {
            $item = null;
        }
        return $item;
    }
    /**
     * @return Catalogue|null
     */
    public static function selectMax()
    {
        $item = new Catalogue();
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('SELECT id FROM catalogue ORDER BY id DESC');
        $pdoStmt->execute();
        if ($data = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
            $item->setId($data['id']);
        } else {
            $item = null;
        }
        return $item;
    }
    /*---------------------------------------------------------------- REQUETE D'INSERTION -------------------------------------------------------------------*/
    /**
     * @param Catalogue $catalogue
     * @return bool
     */
    public static function Insert(Catalogue $catalogue)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('INSERT INTO catalogue (cat, tit, tex) VALUES (:cat, :tit, :tex)');
        $pdoStmt->bindValue(':cat', $catalogue->getCat(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tit', $catalogue->getTit(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tex', $catalogue->getTex(), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
    /*---------------------------------------------------------------- REQUETE DE MISE A JOUR -------------------------------------------------------------------*/
    /**
     * @param Catalogue $catalogue
     * @return bool
     */
    public static function Update(Catalogue $catalogue)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('UPDATE catalogue SET cat=:cat, tit=:tit, tex=:tex WHERE id=:id');
        $pdoStmt->bindValue(':id', $catalogue->getId(), PDO::PARAM_INT);
        $pdoStmt->bindValue(':cat', $catalogue->getCat(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tit', $catalogue->getTit(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tex', $catalogue->getTex(), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
    /*---------------------------------------------------------------- REQUETE DE SUPPRESSION -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return bool
     */
    public static function Delete($id)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('DELETE FROM catalogue WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
}