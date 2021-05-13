<?php

class Agenda
{
    //main variables
    private $id;
    private $date;
    private $time;
    private $task;
    //the builder
    public static function build($date, $time, $task)
    {
        $obj = new static;
        $obj->id = $id;
        $obj->date = $date;
        $obj->time = $time;
        $obj->task = $task;
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
    public static function getById($id){
        if (is_numeric($id)) {
            $conn = self::connect();

            $sql = "SELECT * FROM `agenda` WHERE `id`= ? LIMIT 1";
            $req = $conn->prepare($sql);
            $req->setFetchMode(PDO::FETCH_CLASS, 'agenda'); 
            $req->execute([$id]); //replace ? by id
            return $req->fetch();
        }
    } 
        //get all events function
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
    //create event function
    public function create()
    {
        $conn = self::connect();
        $sql = "INSERT INTO `agenda` (date, time, task) VALUES (:date, :time, :task);";
        $req = $conn->prepare($sql);
        $req->bindValue(":date", $this->date);
        $req->bindValue(":time", $this->time);
        $req->bindValue(":task", $this->task);
        return $req->execute();
    }

    //update event function
    public function modif()
    {
        $conn = self::connect();
        $sql = "UPDATE `agenda` SET (date, time, task) VALUES (:date, :time, :task);";
        $req = $conn->prepare($sql);
        $req->bindValue(":date", $this->date);
        $req->bindValue(":time", $this->time);
        $req->bindValue(":task", $this->task);
        $req->bindValue(":id", $this->id);
        return $req->execute();
    }
    //delete event function
    public function delete()
    {
        $conn = self::connect();
        $sql = "DELETE FROM `agenda` WHERE `id` = :id";
        $req = $conn->prepare($sql);
        $req->bindValue(":id", $this->id);
        return $req->execute();
    }
}
