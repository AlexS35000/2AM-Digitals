<?php

/**
 * Created by PhpStorm.
 * User: Steven Jarnoin
 * Date: 10/06/2016
 * Time: 12:12
 */
class Administrateur
{

    private $id;
    private $log;
    private $psw;
    private $nom;
    private $prenom;
    private $nb;

    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getNb()
    {
        return $this->nb;
    }

    /**
     * @param mixed $nb
     */
    public function setNb($nb)
    {
        $this->nb = $nb;
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
     * Get the value of prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */
    public function setPrenom($prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }


    

    public static function getNbByLoginMdp($log,$psw) {

        $pdo = MgtConnection::getConnection();
        $query = 'select count(*) as nb from login where log=:log and psw=:psw';
        $prep = $pdo->prepare($query);
        $prep->bindValue(':log', $log, PDO::PARAM_STR);
        $prep->bindValue(':psw', $psw, PDO::PARAM_STR);
        $prep->execute();
        $objRecupere = $prep->fetch();
        $item = new Administrateur();
        $item->setNb($objRecupere['nb']);

        return $item;
    }


}