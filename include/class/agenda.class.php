<?php

class Agenda
{
    //main variables
    private $id;
    private $date;
    private $time;
    private $name;
    private $presence;
    //the constructer
    public static function build($date, $time, $name, $presence=null)
    {
        $obj = new static;
        $obj->id = $id;
        $obj->date = $date;
        $obj->time = $time;
        $obj->name = $name;
        $obj->presence = $presence;
    }
    //getter
    public function __get($key)
    {
        return $this->$key;
    }//setter
    public function __set($key, $value)
    {
        $this->$key = $value;
    }
    //get all subjects function
    public static function showAll()
    {
        $conn = self::connect();

        $sql = "SELECT * FROM `agenda`";
        $req = $conn->query($sql);
        $req->setFetchMode(PDO::FETCH_CLASS, 'agenda');
        return $req->fetchAll();
    }
    
    //DB connect
    public static function connect()
    {
        try {
            return new PDO("mysql:host=localhost;dbname=contact", "root", "");
        } catch (PDOException $e) {
            return $e->getMessage();
        }
    }
    //function to create a changement in the agenda
    public function create()
    {
        $conn = self::connect();

        $sql = "INSERT INTO `agenda` (nom, date, time, presence) VALUES (:nom, :date, :time, :presence);";
        $req = $conn->prepare($sql);
        $req->bindValue(":nom", $this->nom);
        $req->bindValue(":date", $this->date);
        $req->bindValue(":time", $this->time);
        $req->bindValue(":presence", $this->presence);
        return $req->execute();
    }

    //function to modificate the agenda
    public function modif()
    {
        $conn = self::connect();

        $sql = "UPDATE `agenda` SET (nom, date, time, presence) VALUES (:nom, :date, :time, :presence);";
        $req = $conn->prepare($sql);
        $req->bindValue(":nom", $this->nom);
        $req->bindValue(":date", $this->date);
        $req->bindValue(":time", $this->time);
        $req->bindValue(":presence", $this->presence);
        $req->bindValue(":id", $this->id);
        return $req->execute();
    }
    //function to delete from the agenda
    public function delete()
    {
        $conn = self::connect();

        $sql = "DELETE FROM `agenda` WHERE `id` = :id";
        $req = $conn->prepare($sql);
        $req->bindValue(":id", $this->id);
        return $req->execute();
    }
}
