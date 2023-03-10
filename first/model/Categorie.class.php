<?php
/**
 * Created VSCODE
 * User: AM DIGITAL
 * Date: 14/02/2023
 */
/*---------------------------------------------------------------- Création de la class -------------------------------------------------------------------*/
class Categorie
/*---------------------------------------------------------------- Création des variables -------------------------------------------------------------------*/
{
    private $id;
    private $cat;
    private $des;
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
     * Get the value of des
     */
    public function getDes()
    {
        return $this->des;
    }

    /**
     * Set the value of des
     */
    public function setDes($des): self
    {
        $this->des = $des;

        return $this;
    }
    /*---------------------------------------------------------------- REQUETE DE SELECTION MULTIPLE -------------------------------------------------------------------*/
    /**
     * @return Categorie[]
     */
    public static function selectAll()
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, cat, des FROM cat';
        $prep = $pdo->prepare($query);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new Categorie();
            $item->setId($obj['id']);
            $item->setCat($obj['cat']);
            $item->setDes($obj['des']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }
    /*---------------------------------------------------------------- REQUETE DE SELECTION UNIQUE -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return Categorie|null
     */
    public static function selectOneById($id)
    {
        $item = new Categorie();
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('SELECT id, cat, des FROM cat where id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        if ($data = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
            $item->setId($data['id']);
            $item->setCat($data['cat']);
            $item->setDes($data['des']);
        } else {
            $item = null;
        }
        return $item;
    }
    /*---------------------------------------------------------------- REQUETE D'INSERTION -------------------------------------------------------------------*/
    /**
     * @param Categorie $categorie
     * @return bool
     */
    public static function Insert(Categorie $categorie)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('INSERT INTO cat (cat, des) VALUES (:cat, :des)');
        $pdoStmt->bindValue(':cat', $categorie->getCat(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':des', $categorie->getDes(), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
    /*---------------------------------------------------------------- REQUETE DE MISE A JOUR -------------------------------------------------------------------*/
    /**
     * @param Categorie $categorie
     * @return bool
     */
    public static function Update(Categorie $categorie)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('UPDATE cat SET cat=:cat, des=:des WHERE id=:id');
        $pdoStmt->bindValue(':id', $categorie->getId(), PDO::PARAM_INT);
        $pdoStmt->bindValue(':cat', $categorie->getCat(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':des', $categorie->getDes(), PDO::PARAM_STR);
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
        $pdoStmt = $pdo->prepare('DELETE FROM cat WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
}