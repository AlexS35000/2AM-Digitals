<?php
/**
 * Created VSCODE
 * User: 2AM DIGITALS
 * Date: 08/03/2023
 */
class Login
/*---------------------------------------------------------------- Création des variables -------------------------------------------------------------------*/
{
    private $id;
    private $log;
    private $psw;
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
     * Get the value of log
     */
    public function getLog()
    {
        return $this->log;
    }

    /**
     * Set the value of log
     */
    public function setLog($log): self
    {
        $this->log = $log;

        return $this;
    }

    /**
     * Get the value of psw
     */
    public function getPsw()
    {
        return $this->psw;
    }

    /**
     * Set the value of psw
     */
    public function setPsw($psw): self
    {
        $this->psw = $psw;

        return $this;
    }
 
/*---------------------------------------------------------------- Requette de selection multiple -------------------------------------------------------------------*/       
    /**
    * @param Login $login
    * @return Login[]
    */
   public static function selectAllbyLog(Login $login)
   {
       $pdo = MgtConnection::getConnection();
       $query = 'SELECT id FROM usr_log WHERE log=:log AND psw=:psw';
       $prep = $pdo->prepare($query);
       $prep->bindValue(':log', $login->getLog(), PDO::PARAM_STR);
       $prep->bindValue(':psw', $login->getPsw(), PDO::PARAM_STR);
       $prep->execute();
       $listeRecup = $prep->fetchall();
       $listeObj = array();
       foreach ($listeRecup as $obj) {
           $item = new Login();
           $item->setId($obj['id']);
           $listeObj[] = $item;
       }
       return $listeObj;
   }
/*---------------------------------------------------------------- Requette de selection unique -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return Login|null
     */
    public static function selectOneById($id)
    {
        $item = new Login();
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('SELECT id, log, psw FROM usr_log WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        if ($data = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
            $item->setId($data['id']);
            $item->setLog($data['log']);
            $item->setPsw($data['psw']);
        } else {
            $item = null;
        }
        return $item;
    }
/*---------------------------------------------------------------- Requette d'insertion -------------------------------------------------------------------*/
    /**
     * @param Login $login
     * @return bool
     */
    public static function Insert(Login $login)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('INSERT INTO usr_log (log, psw) VALUES (:log, :psw)');
        $pdoStmt->bindValue(':log', $login->getLog(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':psw', $login->getPsw(), PDO::PARAM_STR);
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
        $pdoStmt = $pdo->prepare('DELETE FROM usr_log WHERE id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
}