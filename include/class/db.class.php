<?php
class database
{
    private static $host = 'localhost';
    private static $driver = 'mysql';
    private static $database = "joe_agenda";
    private static $user = "root";
    private static $password = "";

    private static $_conn;

    private static function conn(){
        if(empty(self::$_conn)){
            try{
                self::$_conn = new PDO(self::$driver.":host=".self::$host.";dbname=".self::$database, self::$user, self::$password);
            } catch(PDOException $e){
                // var_dump($e->getMessage());
                self::$_conn = null;
            }
        }
        return self::$_conn;
    }
    public static function getById($id)
    {
        $req = self::conn()->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, "agenda");
        $req->bindValue(":id", $id);
        $req->execute();
        return self::$req->fetch();
    }
    //get all events function
    public static function showAll()
    {
        $sql = "SELECT * FROM `agenda`";
        $req = self::conn()->prepare($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, "agenda");
        $req->execute();
        return $req->fetchAll();
    }
        
    //create event function
    public static function create($obj)
    {
        $sql = "INSERT INTO `agenda` (`date`, `time`, `task`) VALUES (:date, :time, :task);";
        $req = self::conn()->prepare($sql);
        $req->bindValue(":date", $obj->date);
        $req->bindValue(":time", $obj->time);
        $req->bindValue(":task", $obj->task);
        return $req->execute();
    }
    
    //update event function
    public static function modif()
    {
        $conn = self::connect($obj);
        //$sql = "UPDATE `agenda` SET (date, time, task) VALUES (:date, :time, :task);";
        $sql = "UPDATE `agenda` SET `date` = :date, `time` = :time, `task` = :task,  WHERE `agenda`.`id` = :id ";
        $req = self::conn()->prepare($sql);
        $req->bindValue(":id", $obj->id);
        $req->bindValue(":date", $obj->date);
        $req->bindValue(":time", $obj->time);
        $req->bindValue(":task", $obj->task);
        return $req->execute();
    }
    //delete event function
    public static function delete($id)
    {
        $sql = "DELETE FROM `agenda` WHERE `ID` = :id LIMIT 1";
        $req = self::conn()->prepare($sql);
        $req->bindValue(":id", $id);
        return $req->execute();
    }
}
