<?php
/**
 * Created VSCODE
 * User: 2AM DIGITALS
 * Date: 08/03/2023
 */
class ClientJou
/*---------------------------------------------------------------- Création des variables -------------------------------------------------------------------*/
{
    private $id;
    private $idc;
    private $idl;
    private $dat;
    private $act;
    private $typ;
    private $tra;
    private $co1;
    private $co2;
/*---------------------------------------------------------------- Construction du modèle -------------------------------------------------------------------*/
    public function __construct()
    {
    }

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
     * Get the value of idc
     */
    public function getIdc()
    {
        return $this->idc;
    }

    /**
     * Set the value of idc
     */
    public function setIdc($idc): self
    {
        $this->idc = $idc;

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
     * Get the value of act
     */
    public function getAct()
    {
        return $this->act;
    }

    /**
     * Set the value of act
     */
    public function setAct($act): self
    {
        $this->act = $act;

        return $this;
    }

    /**
     * Get the value of typ
     */
    public function getTyp()
    {
        return $this->typ;
    }

    /**
     * Set the value of typ
     */
    public function setTyp($typ): self
    {
        $this->typ = $typ;

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

    /**
     * Get the value of co1
     */
    public function getCo1()
    {
        return $this->co1;
    }

    /**
     * Set the value of co1
     */
    public function setCo1($co1): self
    {
        $this->co1 = $co1;

        return $this;
    }

    /**
     * Get the value of co2
     */
    public function getCo2()
    {
        return $this->co2;
    }

    /**
     * Set the value of co2
     */
    public function setCo2($co2): self
    {
        $this->co2 = $co2;

        return $this;
    }
/*---------------------------------------------------------------- Requette de selection multiple -------------------------------------------------------------------*/
    /**
     * @param $idc
     * @return ClientJou[]
     */
    public static function selectAllbyClient($idc)
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, idc, idl, dat, act, typ, tra, co1, co2 FROM cli_jou WHERE idc=:idc ORDER BY act';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':idc', $idc, PDO::PARAM_STR);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new ClientJou();
            $item->setId($obj['id']);
            $item->setIdc($obj['idc']);
            $item->setIdl($obj['idl']);
            $item->setDat($obj['dat']);
            $item->setAct($obj['act']);
            $item->setTyp($obj['typ']);
            $item->setTra($obj['tra']);
            $item->setCo1($obj['co1']);
            $item->setCo2($obj['co2']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }  
    /*---------------------------------------------------------------- Requette de selection multiple -------------------------------------------------------------------*/
        /**
         * @param $idc
         * @return ClientJou[]
         */
        public static function selectAllbyClientAfaire($idc)
        {
            $pdo = MgtConnection::getConnection();
            $query = 'SELECT id, idc, idl, dat, act, typ, tra, co1, co2 FROM cli_jou WHERE idc=:idc AND tra = ""  ORDER BY act';
            $prep = $pdo->prepare($query);
            $prep->bindValue(':idc', $idc, PDO::PARAM_STR);
            $prep->execute();
            $listeRecup = $prep->fetchall();
            $listeObj = array();
            foreach ($listeRecup as $obj) {
                $item = new ClientJou();
                $item->setId($obj['id']);
                $item->setIdc($obj['idc']);
                $item->setIdl($obj['idl']);
                $item->setDat($obj['dat']);
                $item->setAct($obj['act']);
                $item->setTyp($obj['typ']);
                $item->setTra($obj['tra']);
                $item->setCo1($obj['co1']);
                $item->setCo2($obj['co2']);
                $listeObj[] = $item;
            }
            return $listeObj;
        }  
    /**
     * @param $idl
     * @return ClientJou[]
     */
    public static function selectAllbyOperateur($idl)
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, idc, idl, dat, act, typ, tra, co1, co2 FROM cli_jou WHERE idl=:idl AND tra = "" ORDER BY act';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':idl', $idl, PDO::PARAM_STR);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new ClientJou();
            $item->setId($obj['id']);
            $item->setIdc($obj['idc']);
            $item->setIdl($obj['idl']);
            $item->setDat($obj['dat']);
            $item->setAct($obj['act']);
            $item->setTyp($obj['typ']);
            $item->setTra($obj['tra']);
            $item->setCo1($obj['co1']);
            $item->setCo2($obj['co2']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }  
    /**
     * @param $idl
     * @return ClientJou[]
     */
    public static function selectAllbyOperateurRETARD($idl)
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, idc, idl, dat, act, typ, tra, co1, co2 FROM cli_jou WHERE idl=:idl AND tra = "" AND act < :act ORDER BY act';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':idl', $idl, PDO::PARAM_STR);
        $prep->bindValue(':act', date('Y-m-d'), PDO::PARAM_STR);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new ClientJou();
            $item->setId($obj['id']);
            $item->setIdc($obj['idc']);
            $item->setIdl($obj['idl']);
            $item->setDat($obj['dat']);
            $item->setAct($obj['act']);
            $item->setTyp($obj['typ']);
            $item->setTra($obj['tra']);
            $item->setCo1($obj['co1']);
            $item->setCo2($obj['co2']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }
/*---------------------------------------------------------------- Requette de selection unique -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return ClientJou|null
     */
    public static function selectOneById($id)
    {
        $item = new ClientJou();
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('SELECT id, idc, idl, dat, act, typ, tra, co1, co2 FROM cli_jou WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        if ($obj = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
            $item->setId($obj['id']);
            $item->setIdc($obj['idc']);
            $item->setIdl($obj['idl']);
            $item->setDat($obj['dat']);
            $item->setAct($obj['act']);
            $item->setTyp($obj['typ']);
            $item->setTra($obj['tra']);
            $item->setCo1($obj['co1']);
            $item->setCo2($obj['co2']);
        } else {
            $item = null;
        }
        return $item;
    }  
/*---------------------------------------------------------------- Requette d'insertion -------------------------------------------------------------------*/
    /**
     * @param ClientJou $client
     * @return bool
     */
    public static function Insert(ClientJou $client)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('INSERT INTO cli_jou (idc, idl, dat, act, typ, co1) VALUES (:idc, :idl, :dat, :act, :typ:, co1:)');
        $pdoStmt->bindValue(':idc', $client->getidc(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':idl', $client->getIdl(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':dat', $client->getDat(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':act', $client->getAct(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':typ', $client->getTyp(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':co1', $client->getCo1(), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
    /*---------------------------------------------------------------- Requette d'UPDATE -------------------------------------------------------------------*/
        /**
         * @param ClientJou $client
         * @return bool
         */
        public static function UpdateCom1(ClientJou $client)
        {
            $pdo = MgtConnection::getConnection();
            $pdoStmt = $pdo->prepare('UPDATE cli_jou SET co1 = :co1, act = :act WHERE id=:id ');
            $pdoStmt->bindValue(':id', $client->getid(), PDO::PARAM_INT);
            $pdoStmt->bindValue(':co1', $client->getCo1(), PDO::PARAM_STR);
            $pdoStmt->bindValue(':act', $client->getAct(), PDO::PARAM_STR);
            $pdoStmt->execute();
            return $pdoStmt->rowCount();
        }  
    /*---------------------------------------------------------------- Requette d'UPDATE -------------------------------------------------------------------*/
         /**
         * @param ClientJou $client
         * @return bool
         */
        public static function UpdateCom2(ClientJou $client)
        {
            $pdo = MgtConnection::getConnection();
            $pdoStmt = $pdo->prepare('UPDATE cli_jou SET co2 = :co2, tra = :tra WHERE id=:id ');
            $pdoStmt->bindValue(':id', $client->getid(), PDO::PARAM_INT);
            $pdoStmt->bindValue(':co2', $client->getCo2(), PDO::PARAM_STR);
            $pdoStmt->bindValue(':tra', $client->getTra(), PDO::PARAM_STR);
            $pdoStmt->execute();
            return $pdoStmt->rowCount();
        }   
}