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
        $host_name = 'db5012127831.hosting-data.io';
        $database = 'dbs10204877';
        $user_name = 'dbu5453090';
        $password = '2AM-Digitals@2023';
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
