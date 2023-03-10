<?php
/**
 * Created VSCODE
 * User: 2AM DIGITALS
 * Date: 08/03/2023
 */
class UserRap
/*---------------------------------------------------------------- Création des variables -------------------------------------------------------------------*/
{
    private $id;
    private $idl;
    private $cat;
    private $com;
    private $dat;
    private $rap;
    private $tra;
/*---------------------------------------------------------------- Construction du modèle -------------------------------------------------------------------*/
    public function __construct()
    {
    }
/*---------------------------------------------------------------- Définition des GETTER ET SETTER -------------------------------------------------------------------*/

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
     * Get the value of idl
     */
    public function getIdl()
    {
        return $this->idl;
    }

    /**
     * Set the value of idl
     */
    public function setIdl($idl): self
    {
        $this->idl = $idl;

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
     * Get the value of com
     */
    public function getCom()
    {
        return $this->com;
    }

    /**
     * Set the value of com
     */
    public function setCom($com): self
    {
        $this->com = $com;

        return $this;
    }

    /**
     * Get the value of dat
     */
    public function getDat()
    {
        return $this->dat;
    }

    /**
     * Set the value of dat
     */
    public function setDat($dat): self
    {
        $this->dat = $dat;

        return $this;
    }

    /**
     * Get the value of rap
     */
    public function getRap()
    {
        return $this->rap;
    }

    /**
     * Set the value of rap
     */
    public function setRap($rap): self
    {
        $this->rap = $rap;

        return $this;
    }

    /**
     * Get the value of tra
     */
    public function getTra()
    {
        return $this->tra;
    }

    /**
     * Set the value of tra
     */
    public function setTra($tra): self
    {
        $this->tra = $tra;

        return $this;
    }
    /*---------------------------------------------------------------- Requette de selection multiple -------------------------------------------------------------------*/
    /**
    * @param $idl
     * @return UserRap[]
     */
    public static function selectAllbyId($idl)
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, idl, cat, com, dat, rap, tra FROM usr_rap WHERE idl=:idl ORDER BY dat desc';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':idl', $idl, PDO::PARAM_STR);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new UserRap();
            $item->setId($obj['id']);
            $item->setIdl($obj['idl']);
            $item->setCat($obj['cat']);
            $item->setCom($obj['com']);
            $item->setDat($obj['dat']);
            $item->setRap($obj['rap']);
            $item->setTra($obj['tra']);
            $listeObj[] = $item;
        }
        return $listeObj;
    } 
    /**
     * @return UserRap[]
     */
    public static function selectAllbyTra()
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, idl, cat, com, dat, rap, tra FROM usr_rap WHERE tra="" ORDER BY dat';
        $prep = $pdo->prepare($query);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new UserRap();
            $item->setId($obj['id']);
            $item->setIdl($obj['idl']);
            $item->setCat($obj['cat']);
            $item->setCom($obj['com']);
            $item->setDat($obj['dat']);
            $item->setRap($obj['rap']);
            $item->setTra($obj['tra']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }
    /**
    * @param $dat
     * @return UserRap[]
     */
    public static function selectAllbyRel($dat)
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, idl, cat, com, dat, rap, tra FROM usr_rap WHERE tra="" AND rap=:dat ORDER BY cat';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':dat', $dat, PDO::PARAM_STR);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new UserRap();
            $item->setId($obj['id']);
            $item->setIdl($obj['idl']);
            $item->setCat($obj['cat']);
            $item->setCom($obj['com']);
            $item->setDat($obj['dat']);
            $item->setRap($obj['rap']);
            $item->setTra($obj['tra']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }   
/*---------------------------------------------------------------- Requette de selection unique -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return UserRap|null
     */
    public static function selectOneById($id)
    {
        $item = new UserRap();
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('SELECT id, idl, cat, com, dat, rap, tra FROM usr_rap WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        if ($obj = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
            $item->setId($obj['id']);
            $item->setIdl($obj['idl']);
            $item->setCat($obj['cat']);
            $item->setCom($obj['com']);
            $item->setDat($obj['dat']);
            $item->setRap($obj['rap']);
            $item->setTra($obj['tra']);
        } else {
            $item = null;
        }
        return $item;
    }
/*---------------------------------------------------------------- Requette d'insertion -------------------------------------------------------------------*/
    /**
     * @param UserRap $user
     * @return bool
     */
    public static function Insert(UserRap $user)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('INSERT INTO usr_rap (idl, cat, com, dat, rap) VALUES (:idl, :cat, :com, :dat, :rap)');
        $pdoStmt->bindValue(':idl', $user->getIdl(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cat', $user->getCat(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':com', $user->getCom(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':dat', $user->getDat(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':rap', $user->getRap(), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
/*---------------------------------------------------------------- Requette de mise à jour -------------------------------------------------------------------*/
    /**
     * @param UserRap $user
     * @return bool
     */
    public static function Update(UserRap $user)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('UPDATE usr_rap SET com=:com, tra=:tra WHERE id=:id');
        $pdoStmt->bindValue(':id', $user->getId(), PDO::PARAM_INT);
        $pdoStmt->bindValue(':com', $user->getCom(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tra', date('d/m/Y'), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
}