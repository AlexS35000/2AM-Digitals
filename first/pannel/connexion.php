<?php
/**
 * Created by PhpStorm.
 * User: Steven Jarnoin
 * Date: 10/06/2016
 * Time: 15:12
 */
//ini_set('display_errors', 1);
session_start();
require_once ('../model/autoload.php');
include_once('../model/MgtConnection.php');

$erreur=$_SESSION['erreur'];

/**vue de la page connexion**/
include_once('../vue/vue-connexion.php');