<?php
/**
 * Created VSCODE
 * User: 2AM DIGITALS
 * Date: 08/03/2023
 */
class ClientEmp
/*---------------------------------------------------------------- Création des variables -------------------------------------------------------------------*/
{
    private $id;
    private $idc;
    private $nam;
    private $sur;
    private $job;
    private $tel;
    private $pho;
    private $mel;
    private $com;
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
     * Get the value of nam
     */
    public function getNam()
    {
        return $this->nam;
    }

    /**
     * Set the value of nam
     */
    public function setNam($nam): self
    {
        $this->nam = $nam;

        return $this;
    }

    /**
     * Get the value of sur
     */
    public function getSur()
    {
        return $this->sur;
    }

    /**
     * Set the value of sur
     */
    public function setSur($sur): self
    {
        $this->sur = $sur;

        return $this;
    }

    /**
     * Get the value of job
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set the value of job
     */
    public function setJob($job): self
    {
        $this->job = $job;

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
     * Get the value of pho
     */
    public function getPho()
    {
        return $this->pho;
    }

    /**
     * Set the value of pho
     */
    public function setPho($pho): self
    {
        $this->pho = $pho;

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
    /*---------------------------------------------------------------- Requette de selection multiple -------------------------------------------------------------------*/
        /**
         * @param $idc
         * @return ClientEmp[]
         */
        public static function selectAll($idc)
        {
            $pdo = MgtConnection::getConnection();
            $query = 'SELECT id, idc, nam, sur, job, tel, pho, mel, com FROM cli_emp WHERE idc=:idc ORDER BY nam';
            $prep = $pdo->prepare($query);
            $prep->bindValue(':idc', $idc, PDO::PARAM_STR);
            $prep->execute();
            $listeRecup = $prep->fetchall();
            $listeObj = array();
            foreach ($listeRecup as $obj) {
                $item = new ClientEmp();
                $item->setId($obj['id']);
                $item->setIdc($obj['idc']);
                $item->setNam($obj['nam']);
                $item->setSur($obj['sur']);
                $item->setJob($obj['job']);
                $item->setTel($obj['tel']);
                $item->setPho($obj['pho']);
                $item->setMel($obj['mel']);
                $item->setCom($obj['com']);
                $listeObj[] = $item;
            }
            return $listeObj;
        } 
        /*---------------------------------------------------------------- Requette de selection unique -------------------------------------------------------------------*/
            /**
             * @param $id
             * @return ClientEmp|null
             */
            public static function selectOneById($id)
            {
                $item = new ClientEmp();
                $pdo = MgtConnection::getConnection();
                $pdoStmt = $pdo->prepare('SELECT id, idc, nam, sur, job, tel, pho, mel, com FROM cli_emp WHERE id=:id');
                $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
                $pdoStmt->execute();
                if ($obj = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
                    $item->setId($obj['id']);
                    $item->setIdc($obj['idc']);
                    $item->setNam($obj['nam']);
                    $item->setSur($obj['sur']);
                    $item->setJob($obj['job']);
                    $item->setTel($obj['tel']);
                    $item->setPho($obj['pho']);
                    $item->setMel($obj['mel']);
                    $item->setCom($obj['com']);
                } else {
                    $item = null;
                }
                return $item;
            }
            /*---------------------------------------------------------------- Requette d'insertion -------------------------------------------------------------------*/
                /**
                 * @param ClientEmp $client
                 * @return bool
                 */
                public static function Insert(ClientEmp $client)
                {
                    $pdo = MgtConnection::getConnection();
                    $pdoStmt = $pdo->prepare('INSERT INTO cli_emp (idc, nam, sur, job, tel, pho, mel, com) VALUES (:idc, :nam, :sur, :job, :tel, :pho, :mel, :com)');
                    $pdoStmt->bindValue(':idc', $client->getIdc(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':nam', $client->getNam(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':sur', $client->getSur(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':job', $client->getJob(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':tel', $client->getTel(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':pho', $client->getPho(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':mel', $client->getMel(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':com', $client->getCom(), PDO::PARAM_STR);
                    $pdoStmt->execute();
                    return $pdoStmt->rowCount();
                }
            /*---------------------------------------------------------------- Requette d'insertion -------------------------------------------------------------------*/
                /**
                 * @param ClientEmp $client
                 * @return bool
                 */
                public static function Update(ClientEmp $client)
                {
                    $pdo = MgtConnection::getConnection();
                    $pdoStmt = $pdo->prepare('UPDATE cli_emp SET nam=:nam, sur=:sur, job=:job, tel=:tel, pho=:pho, mel=:mel, com=:com WHERE id=:id');
                    $pdoStmt->bindValue(':id', $client->getId(), PDO::PARAM_INT);
                    $pdoStmt->bindValue(':nam', $client->getNam(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':sur', $client->getSur(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':job', $client->getJob(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':tel', $client->getTel(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':pho', $client->getPho(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':mel', $client->getMel(), PDO::PARAM_STR);
                    $pdoStmt->bindValue(':com', $client->getCom(), PDO::PARAM_STR);
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
        $pdoStmt = $pdo->prepare('DELETE FROM cli_emp WHERE idc=:idc');
        $pdoStmt->bindValue(':idc', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }  
}