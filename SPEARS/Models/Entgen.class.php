<?php
/**
 * Created VSCODE
 * User: 2AM DIGITALS
 * Date: 08/03/2023
 */
class Entreprise
/*---------------------------------------------------------------- Création des variables -------------------------------------------------------------------*/
{
    private $id;
    private $den;
    private $adr;
    private $cpo;
    private $vil;
    private $tel;
    private $mel;
    private $sir;
    private $tva;
    private $rcs;
    private $cap;
    private $mde;
    private $mcp;
    private $cgv;
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
     * Get the value of den
     */
    public function getDen()
    {
        return $this->den;
    }

    /**
     * Set the value of den
     */
    public function setDen($den): self
    {
        $this->den = $den;

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
     * Get the value of mde
     */
    public function getMde()
    {
        return $this->mde;
    }

    /**
     * Set the value of mde
     */
    public function setMde($mde): self
    {
        $this->mde = $mde;

        return $this;
    }

    /**
     * Get the value of mcp
     */
    public function getMcp()
    {
        return $this->mcp;
    }

    /**
     * Set the value of mcp
     */
    public function setMcp($mcp): self
    {
        $this->mcp = $mcp;

        return $this;
    }

    /**
     * Get the value of cgv
     */
    public function getCgv()
    {
        return $this->cgv;
    }

    /**
     * Set the value of cgv
     */
    public function setCgv($cgv): self
    {
        $this->cgv = $cgv;

        return $this;
    }
/*---------------------------------------------------------------- Requette de selection multiple -------------------------------------------------------------------*/
    /**
     * @return Entreprise[]
     */
    public static function selectAll()
    {
        $pdo = MgtConnection::getConnection();
        $query = 'SELECT id, den, cpo, vil, tel, mel, sir, tva, rcs, cap, mde, mcp, cgv FROM ent_gen ORDER BY id desc';
        $prep = $pdo->prepare($query);
        $prep->execute();
        $listeRecup = $prep->fetchall();
        $listeObj = array();
        foreach ($listeRecup as $obj) {
            $item = new Entreprise();
            $item->setId($obj['id']);
            $item->setDen($obj['den']);
            $item->setCpo($obj['cpo']);
            $item->setVil($obj['vil']);
            $item->setTel($obj['tel']);
            $item->setMel($obj['mel']);
            $item->setSir($obj['sir']);
            $item->setTva($obj['tva']);
            $item->setRcs($obj['rcs']);
            $item->setCap($obj['cap']);
            $item->setMde($obj['mde']);
            $item->setMcp($obj['mcp']);
            $item->setCgv($obj['cgv']);
            $listeObj[] = $item;
        }
        return $listeObj;
    }
/*---------------------------------------------------------------- Requette de selection unique -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return Entreprise|null
     */
    public static function selectOneById($id)
    {
        $item = new Entreprise();
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('SELECT id, den, cpo, vil, tel, mel, sir, tva, rcs, cap, mde, mcp, cgv FROM ent_gen WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        if ($data = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
            $item->setId($data['id']);
            $item->setDen($data['den']);
            $item->setCpo($data['cpo']);
            $item->setVil($data['vil']);
            $item->setTel($data['tel']);
            $item->setMel($data['mel']);
            $item->setSir($data['sir']);
            $item->setTva($data['tva']);
            $item->setRcs($data['rcs']);
            $item->setCap($data['cap']);
            $item->setMde($data['mde']);
            $item->setMcp($data['mcp']);
            $item->setCgv($data['cgv']);
        } else {
            $item = null;
        }
        return $item;
    }
/*---------------------------------------------------------------- Requette d'insertion -------------------------------------------------------------------*/
    /**
     * @param Entreprise $entreprise
     * @return bool
     */
    public static function Insert(Entreprise $entreprise)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('INSERT INTO ent_gen (den, cpo, vil, tel, mel, sir, tva, rcs, cap, mde, mcp, cgv) VALUES (:den, :cpo, :vil, :tel, :mel, :sir, :tva, :rcs, :cap, :mde, :mcp, :cgv)');
        $pdoStmt->bindValue(':den', $entreprise->getDen(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':adr', $entreprise->getAdr(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cpo', $entreprise->getCpo(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':vil', $entreprise->getVil(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tel', $entreprise->getTel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':mel', $entreprise->getMel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':sir', $entreprise->getSir(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tva', $entreprise->getTva(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':rcs', $entreprise->getRcs(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cap', $entreprise->getCap(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':mde', $entreprise->getMde(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':mcp', $entreprise->getMcp(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cgv', $entreprise->getCgv(), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
/*---------------------------------------------------------------- Requette de mise à jour -------------------------------------------------------------------*/
    /**
     * @param Entreprise $entreprise
     * @return bool
     */
    public static function Update(Entreprise $entreprise)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('UPDATE ent_gen SET den=:den, cpo=:cpo, vil=:vil, tel=:tel, mel=:mel, sir=:sir, tva=:tva, rcs=:rcs, cap=:cap, mde=:mde, mcp=:mcp, cgv=:cgv WHERE id=:id');
        $pdoStmt->bindValue(':id', $entreprise->getId(), PDO::PARAM_INT);
        $pdoStmt->bindValue(':den', $entreprise->getDen(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':adr', $entreprise->getAdr(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cpo', $entreprise->getCpo(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':vil', $entreprise->getVil(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tel', $entreprise->getTel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':mel', $entreprise->getMel(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':sir', $entreprise->getSir(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tva', $entreprise->getTva(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':rcs', $entreprise->getRcs(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cap', $entreprise->getCap(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':mde', $entreprise->getMde(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':mcp', $entreprise->getMcp(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':cgv', $entreprise->getCgv(), PDO::PARAM_STR);
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
        $pdoStmt = $pdo->prepare('DELETE FROM ent_gen WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
}