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
        $host_name = 'db5012210464.hosting-data.io';
        $database = 'dbs10274640';
        $user_name = 'dbu1012495';
        $password = 'GRC-2AMS/new2023$';
        $dbh = null;
        try {
            $dbh = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
          } catch (PDOException $e) {
            echo "Erreur!:" . $e->getMessage() . "<br/>";
            die();
          }
        return $dbh;
    }
}
