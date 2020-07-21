<?php

class DB
{
    private static $connect = null;

    public static function connection()
    {
        $dns      = 'mysql:host=localhost;dbname=news';
        $username = 'root';
        $password = 'Nhatnm@123';
        $options  = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        );

        try {
            self::$connect = new PDO($dns, $username, $password, $options);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }

        return self::$connect;
    }

    public static function close(){
        return self::$connect = null;
    }
}
