<?php
include "database/database.conf.php";

global $databases;
$config = $databases['local'];

define('DBHOST', $config['host']);
define('DBNAME', $config['dbname']);
define('DBUSER', $config['user']);
define('DBPASS', $config['password']);

function query($sql, $first = false)
{
        //code...$stament = null;
        $pdo = null;
        $pdo = new PDO('mysql:host=' . DBHOST . ';dbname=' . DBNAME, DBUSER, DBPASS, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $statement = $pdo->prepare($sql);
        $statement->execute();

        $arrdata = $statement->fetchAll(PDO::FETCH_ASSOC);
        if ($first) return $arrdata[0];
        return $arrdata;
}
