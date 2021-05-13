<?php 
/**
 * creating our db connection
 */
class database
{
    private static $_host = "localhost";
    private static $_user = "root";
    private static $_mdp = "";
    private static $_bdd = "joe_agenda";

    public static $_conn;

    public static function getConnected()
    {
        self::$_conn = new PDO("mysql:host=".self::$_host.";dbname=".self::$_bdd.";charset=UTF8", self::$_user, self::$_mdp);
    }
}
