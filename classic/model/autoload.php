<?php
/**
 * Created VSCODE
 * User: AM DIGITAL
 * Date: 14/02/2023
 */
//---------------------------------------------------------------------------------------------------------------------- CLASS GENERALE
$dirname = '../model/';
if(!is_dir($dirname)){
    $dirname = '../../model/';
}
$dir = opendir($dirname);


foreach (glob($dirname.'/*.class.php') as $filename)
{
   include_once $filename;

}