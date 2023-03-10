<?php
/**
 * Created VSCODE
 * User: 2AM DIGITALS
 * Date: 08/03/2023
 */
class ClientInfos
/*---------------------------------------------------------------- Création des variables -------------------------------------------------------------------*/
{
    private $id;
    private $idc;
    private $ent;
    private $adr;
    private $cpo;
    private $vil;
    private $tel;
    private $mel;
    private $sit;
    private $sir;
    private $act;
    private $tva;
    private $pre;
    private $rcs;
    private $cap;
    private $sal;
    private $dat;
    private $fic;
    private $sta;
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
     * Get the value of ent
     */
    public function getEnt()
    {
        return $this->ent;
    }

    /**
     * Set the value of ent
     */
    public function setEnt($ent): self
    {
        $this->ent = $ent;

        return $this;
    }

    /**
     * Get the value of adr
     */
    public function getAdr()
    {
        return $this->adr;
    }

    /**
     * Set the value of adr
     */
    public function setAdr($adr): self
    {
        $this->adr = $adr;

        return $this;
    }

    /**
     * Get the value of cpo
     */
    public function getCpo()
    {
        return $this->cpo;
    }

    /**
     * Set the value of cpo
     */
    public function setCpo($cpo): self
    {
        $this->cpo = $cpo;

        return $this;
    }

    /**
     * Get the value of vil
     */
    public function getVil()
    {
        return $this->vil;
    }

    /**
     * Set the value of vil
     */
    public function setVil($vil): self
    {
        $this->vil = $vil;

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
     * Get the value of sit
     */
    public function getSit()
    {
        return $this->sit;
    }

    /**
     * Set the value of sit
     */
    public function setSit($sit): self
    {
        $this->sit = $sit;

        return $this;
    }

    /**
     * Get the value of sir
     */
    public function getSir()
    {
        return $this->sir;
    }

    /**
     * Set the value of sir
     */
    public function setSir($sir): self
    {
        $this->sir = $sir;

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
     * Get the value of tva
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Set the value of tva
     */
    public function setTva($tva): self
    {
        $this->tva = $tva;

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
     * Get the value of rcs
     */
    public function getRcs()
    {
        return $this->rcs;
    }

    /**
     * Set the value of rcs
     */
    public function setRcs($rcs): self
    {
        $this->rcs = $rcs;

        return $this;
    }

    /**
     * Get the value of cap
     */
    public function getCap()
    {
        return $this->cap;
    }

    /**
     * Set the value of cap
     */
    public function setCap($cap): self
    {
        $this->cap = $cap;

        return $this;
    }

    /**
     * Get the value of sal
     */
    public function getSal()
    {
        return $this->sal;
    }

    /**
     * Set the value of sal
     */
    public function setSal($sal): self
    {
        $this->sal = $sal;

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
     * Get the value of fic
     */
    public function getFic()
    {
        return $this->fic;
    }

    /**
     * Set the value of fic
     */
    public function setFic($fic): self
    {
        $this->fic = $fic;

        return $this;
    }  

    /**
     * Get the value of sta
     */
    public function getSta()
    {
        return $this->sta;
    }

    /**
     * Set the value of sta
     */
    public function setSta($sta): self
    {
        $this->sta = $sta;

        return $this;
    }
/*---------------------------------------------------------------- Requette de selection multiple -------------------------------------------------------------------*/
    /**
     * @param $fic
     * @return ClientInfos[]
     */
    public static function selectAll($fic)
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, idc, dat, fic, sta, ent, adr, cpo, vil, tel, mel, sit, sir, act, tva, pre, rcs, cap, sal FROM cli_inf WHERE fic=:fic ORDER BY ent';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':fic', $fic, PDO::PARAM_STR);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new ClientInfos();
            $item->setId($obj['id']);
            $item->setDat($obj['dat']);
            $item->setFic($obj['fic']);
            $item->setSta($obj['sta']);
            $item->setIdc($obj['idc']);
            $item->setEnt($obj['ent']);
            $item->setAdr($obj['adr']);
            $item->setCpo($obj['cpo']);
            $item->setVil($obj['vil']);
            $item->setTel($obj['tel']);
            $item->setMel($obj['mel']);
            $item->setSit($obj['sit']);
            $item->setSir($obj['sir']);
            $item->setAct($obj['act']);
            $item->setTva($obj['tva']);
            $item->setPre($obj['pre']);
            $item->setRcs($obj['rcs']);
            $item->setCap($obj['cap']);
            $item->setSal($obj['sal']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }    
    /**
     * @param ClientInfos $client
     * @return ClientInfos[]
     */
    public static function selectAllbyRec(ClientInfos $client)
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, dat, fic, sta, idc, ent, adr, cpo, vil, tel, mel, sit, sir, act, tva, pre, rcs, cap, sal FROM cli_inf 
        WHERE fic=:fic AND ent LIKE :ent AND cpo LIKE :cpo AND vil LIKE :vil AND sir LIKE :sir AND sta LIKE :sta ORDER BY ent';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':fic', $client->getFic(), PDO::PARAM_STR);
        $prep->bindValue(':ent', '%'.$client->getEnt().'%', PDO::PARAM_STR);
        $prep->bindValue(':cpo', '%'.$client->getCpo().'%', PDO::PARAM_STR);
        $prep->bindValue(':vil', '%'.$client->getVil().'%', PDO::PARAM_STR);
        $prep->bindValue(':sir', '%'.$client->getSir().'%', PDO::PARAM_STR);
        $prep->bindValue(':sta', '%'.$client->getSta().'%', PDO::PARAM_STR);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new ClientInfos();
            $item->setId($obj['id']);
            $item->setDat($obj['dat']);
            $item->setFic($obj['fic']);
            $item->setSta($obj['sta']);
            $item->setIdc($obj['idc']);
            $item->setEnt($obj['ent']);
            $item->setAdr($obj['adr']);
            $item->setCpo($obj['cpo']);
            $item->setVil($obj['vil']);
            $item->setTel($obj['tel']);
            $item->setMel($obj['mel']);
            $item->setSit($obj['sit']);
            $item->setSir($obj['sir']);
            $item->setAct($obj['act']);
            $item->setTva($obj['tva']);
            $item->setPre($obj['pre']);
            $item->setRcs($obj['rcs']);
            $item->setCap($obj['cap']);
            $item->setSal($obj['sal']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }    
/*---------------------------------------------------------------- Requette de selection unique -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return ClientInfos|null
     */
    public static function selectOneById($id)
    {
        $item = new ClientInfos();
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('SELECT id, dat, fic, sta, idc, ent, adr, cpo, vil, tel, mel, sit, sir, act, tva, pre, rcs, cap, sal FROM cli_inf WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        if ($obj = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
            $item->setId($obj['id']);
            $item->setDat($obj['dat']);
            $item->setFic($obj['fic']);
            $item->setSta($obj['sta']);
            $item->setIdc($obj['idc']);
            $item->setEnt($obj['ent']);
            $item->setAdr($obj['adr']);
            $item->setCpo($obj['cpo']);
            $item->setVil($obj['vil']);
            $item->setTel($obj['tel']);
            $item->setMel($obj['mel']);
            $item->setSit($obj['sit']);
            $item->setSir($obj['sir']);
            $item->setAct($obj['act']);
            $item->setTva($obj['tva']);
            $item->setPre($obj['pre']);
            $item->setRcs($obj['rcs']);
            $item->setCap($obj['cap']);
            $item->setSal($obj['sal']);
        } else {
            $item = null;
        }
        return $item;
    }
/*---------------------------------------------------------------- Requette d'insertion -------------------------------------------------------------------*/
    /**
     * @param ClientInfos $client
     * @return bool
     */
    public static function Insert(ClientInfos $client)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('INSERT INTO cli_inf 
        (dat, fic, sta, idc, ent, adr, cpo, vil, tel, mel, sit, sir, act, tva, pre, rcs, cap, sal) 
        VALUES 
        (:dat, :fic, :sta, :idc, :ent, :adr, :cpo, :vil, :tel, :mel, :sit, :sir, :act, :tva, :pre, :rcs, :cap, :sal)');
        $pdoStmt->bindValue(':dat', $client->getDat(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':fic', $client->getFic(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':sta', $client->getSta(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':idc', $client->getIdc(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':ent', $client->getEnt(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':adr', $client->getAdr(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cpo', $client->getCpo(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':vil', $client->getVil(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tel', $client->getTel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':mel', $client->getMel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':sit', $client->getSit(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':sir', $client->getSir(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':act', $client->getAct(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tva', $client->getTva(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':pre', $client->getPre(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':rcs', $client->getRcs(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cap', $client->getCap(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':sal', $client->getSal(), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
/*---------------------------------------------------------------- Requette de mise à jour -------------------------------------------------------------------*/
/**
     * @param ClientInfos $client
     * @return bool
     */
    public static function Update(ClientInfos $client)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('UPDATE cli_inf SET
        sta=:sta, ent=:ent, adr=:adr, cpo=:cpo, vil=:vil, tel=:tel, mel=:mel, sit=:sit, sir=:sir, act=:act, tva=:tva, pre=:pre, rcs=:rcs, cap=:cap, sal=:sal 
        WHERE id=:id');
        $pdoStmt->bindValue(':id', $client->getId(), PDO::PARAM_INT);
        $pdoStmt->bindValue(':sta', $client->getSta(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':idc', $client->getIdc(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':ent', $client->getEnt(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':adr', $client->getAdr(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cpo', $client->getCpo(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':vil', $client->getVil(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tel', $client->getTel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':mel', $client->getMel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':sit', $client->getSit(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':sir', $client->getSir(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':act', $client->getAct(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tva', $client->getTva(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':pre', $client->getPre(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':rcs', $client->getRcs(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cap', $client->getCap(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':sal', $client->getSal(), PDO::PARAM_STR);
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
        $pdoStmt = $pdo->prepare('DELETE FROM cli_inf WHERE idc=:idc');
        $pdoStmt->bindValue(':idc', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }  
}