<?php
include_once('class_conf.php');

class Model {

    public static $pdo;

    public static function Init() {
        $hostname = conf::getHostName();
        $database_name = conf::getDataBase();
        $login = conf::getLogin();
        $password = conf::getPassword();

        self::$pdo = new pdo("mysql:hostname=$hostname;dbname=$database_name", $login, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));

        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}
