<?php
/**
 * Created VSCODE
 * User: AM DIGITAL
 * Date: 14/02/2023
 */
class MgtConnection
{
    public static function getConnection()
    {
        try {
            $strConnection = 'mysql:host=db5012163216.hosting-data.io;dbname=dbs10234720'; //Ligne 1
            $arrExtraParam = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); //Ligne 2
            $pdo = new PDO($strConnection, 'dbu4503425', '2AM-Digitals@2023', $arrExtraParam); //Ligne 3; Instancie la connexion
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Ligne 4
        } catch (PDOException $e) {
            $msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
            die($msg);
        }
        return $pdo;
    }
}
