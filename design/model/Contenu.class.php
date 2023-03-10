<?php

/**
 * Created VSCODE
 * User: AM DIGITAL
 * Date: 14/02/2023
 */
/*---------------------------------------------------------------- Création de la class -------------------------------------------------------------------*/
class Contenu
/*---------------------------------------------------------------- Création des variables -------------------------------------------------------------------*/
{
    private $id;
    private $col1;
    private $col2;
    private $col3;
    private $col4;
    private $col5;
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
     * Get the value of col1
     */
    public function getCol1()
    {
        return $this->col1;
    }

    /**
     * Set the value of col1
     */
    public function setCol1($col1): self
    {
        $this->col1 = $col1;

        return $this;
    }

    /**
     * Get the value of col2
     */
    public function getCol2()
    {
        return $this->col2;
    }

    /**
     * Set the value of col2
     */
    public function setCol2($col2): self
    {
        $this->col2 = $col2;

        return $this;
    }

    /**
     * Get the value of col3
     */
    public function getCol3()
    {
        return $this->col3;
    }

    /**
     * Set the value of col3
     */
    public function setCol3($col3): self
    {
        $this->col3 = $col3;

        return $this;
    }

    /**
     * Get the value of col4
     */
    public function getCol4()
    {
        return $this->col4;
    }

    /**
     * Set the value of col4
     */
    public function setCol4($col4): self
    {
        $this->col4 = $col4;

        return $this;
    }

    /**
     * Get the value of col5
     */
    public function getCol5()
    {
        return $this->col5;
    }

    /**
     * Set the value of col5
     */
    public function setCol5($col5): self
    {
        $this->col5 = $col5;

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
    /*---------------------------------------------------------------- Création du modèle de selection -------------------------------------------------------------------*/
    /**
     * @param $id
     * @return Contenu|null
     */
    public static function selectOneById($id)
    {
        $item = new Contenu();
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('SELECT id,col1,col2,col3,col4,col5,tit,tex FROM section where id=:id');
        $pdoStmt->bindValue(':id', $id, PDO::PARAM_INT);
        $pdoStmt->execute();
        if ($data = $pdoStmt->fetch(PDO::FETCH_ASSOC)) {
            $item->setId($data['id']);
            $item->setCol1($data['col1']);
            $item->setCol2($data['col2']);
            $item->setCol3($data['col3']);
            $item->setCol4($data['col4']);
            $item->setCol5($data['col5']);
            $item->setTit($data['tit']);
            $item->setTex($data['tex']);
        } else {
            $item = null;
        }
        return $item;
    }
    /*---------------------------------------------------------------- Création du modèle de mise à jour -------------------------------------------------------------------*/
    /**
     * @param Contenu $contenu
     * @return bool
     */
    public static function update(Contenu $contenu)
    {
        $pdo = MgtConnection::getConnection();
        $pdoStmt = $pdo->prepare('UPDATE section SET col1=:col1, col2=:col2, col3=:col3, col4=:col4, col5=:col5, tit=:tit, tex=:tex WHERE id = :id');
        $pdoStmt->bindValue(':id', $contenu->getId(), PDO::PARAM_INT);
        $pdoStmt->bindValue(':col1', $contenu->getCol1(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':col2', $contenu->getCol2(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':col3', $contenu->getCol3(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':col4', $contenu->getCol4(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':col5', $contenu->getCol5(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tit', $contenu->getTit(), PDO::PARAM_STR);
        $pdoStmt->bindValue(':tex', $contenu->getTex(), PDO::PARAM_STR);
        $pdoStmt->execute();
        return $pdoStmt->rowCount();
    }
}
