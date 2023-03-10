<?php
/**
 * Created VSCODE
 * User: 2AM DIGITALS
 * Date: 08/03/2023
 */
class UserInfos
/*---------------------------------------------------------------- Création des variables -------------------------------------------------------------------*/
{
    private $id;
    private $idl;
    private $pre;
    private $nom;
    private $fon;
    private $tel;
    private $mel;
    private $dat;
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
     * Get the value of pre
     */
    public function getPre()
    {
        return $this->pre;
    }

    /**
     * Set the value of pre
     */
    public function setPre($pre): self
    {
        $this->pre = $pre;

        return $this;
    }

    /**
     * Get the value of nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */
    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of fon
     */
    public function getFon()
    {
        return $this->fon;
    }

    /**
     * Set the value of fon
     */
    public function setFon($fon): self
    {
        $this->fon = $fon;

        return $this;
    }

    /**
     * Get the value of tel
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set the value of tel
     */
    public function setTel($tel): self
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get the value of mel
     */
    public function getMel()
    {
        return $this->mel;
    }

    /**
     * Set the value of mel
     */
    public function setMel($mel): self
    {
        $this->mel = $mel;

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
    
/*---------------------------------------------------------------- Requette de selection multiple -------------------------------------------------------------------*/
    /**
     * @return UserInfos[]
     */
    public static function selectAll()
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, idl, pre, nom, fon, tel, mel, dat FROM usr_inf ORDER BY nom';
        $prep = $pdo->prepare($query);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new UserInfos();
            $item->setId($obj['id']);
            $item->setIdl($obj['idl']);
            $item->setPre($obj['pre']);
            $item->setNom($obj['nom']);
            $item->setFon($obj['fon']);
            $item->setTel($obj['tel']);
            $item->setMel($obj['mel']);
            $item->setDat($obj['dat']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }    
    /**
    * @param $rec
    * @return UserInfos[]
    */
   public static function selectAllbyRec($rec)
   {
       $pdo = MgtConnection::getConnection();
       $query = 'SELECT id, idl, pre, nom, fon, tel, mel, dat FROM usr_inf WHERE pre LIKE :rec OR nom LIKE :rec ORDER BY nom';
       $prep = $pdo->prepare($query);
       $prep->bindValue(':rec', '%'.$rec.'%', PDO::PARAM_STR);
       $prep->execute();
       $listeRecup = $prep->fetchall();
       $listeObj = array();
       foreach ($listeRecup as $obj) {
           $item = new UserInfos();
           $item->setId($obj['id']);
           $item->setIdl($obj['idl']);
           $item->setPre($obj['pre']);
           $item->setNom($obj['nom']);
           $item->setFon($obj['fon']);
           $item->setTel($obj['tel']);
           $item->setMel($obj['mel']);
           $item->setDat($obj['dat']);
           $listeObj[] = $item;
       }
       return $listeObj;
   }
/*---------------------------------------------------------------- Requette de selection unique -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return UserInfos|null
     */
    public static function selectOneById($id)
    {
        $item = new UserInfos();
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('SELECT id, idl, pre, nom, fon, tel, mel, dat FROM usr_inf WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        if ($obj = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
            $item->setId($obj['id']);
            $item->setIdl($obj['idl']);
            $item->setPre($obj['pre']);
            $item->setNom($obj['nom']);
            $item->setFon($obj['fon']);
            $item->setTel($obj['tel']);
            $item->setMel($obj['mel']);
            $item->setDat($obj['dat']);
        } else {
            $item = null;
        }
        return $item;
    }
/*---------------------------------------------------------------- Requette d'insertion -------------------------------------------------------------------*/
    /**
     * @param UserInfos $user
     * @return bool
     */
    public static function Insert(UserInfos $user)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('INSERT INTO usr_inf (idl, pre, nom, fon, tel, mel, dat) VALUES (idl, pre, nom, fon, tel, mel, dat)');
        $pdoStmt->bindValue(':idl', $user->getIdl(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':pre', $user->getPre(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':nom', $user->getNom(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':fon', $user->getFon(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tel', $user->getTel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':mel', $user->getMel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':dat', $user->getDat(), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
/*---------------------------------------------------------------- Requette de mise à jour -------------------------------------------------------------------*/
    /**
     * @param UserInfos $user
     * @return bool
     */
    public static function Update(UserInfos $user)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('UPDATE usr_inf SET idl=:idl, pre=:pre, nom=:nom, fon=:fon, tel=:tel, mel=:mel, dat=:dat WHERE id=:id');
        $pdoStmt->bindValue(':id', $user->getId(), PDO::PARAM_INT);
        $pdoStmt->bindValue(':idl', $user->getIdl(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':pre', $user->getPre(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':nom', $user->getNom(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':fon', $user->getFon(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tel', $user->getTel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':mel', $user->getMel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':dat', $user->getDat(), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
/*---------------------------------------------------------------- Requette de suppression -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return bool
     */
    public static function Delete($id)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('DELETE FROM usr_inf WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
}