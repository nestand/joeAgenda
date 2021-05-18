<?php
class agenda
{
    //main variables. Ne pas mettre statiques! 
    public $id;
    public $date;
    public $time;
    public $task;
    
    //the builder
    public static function build($date, $time, $task)
    {
        $obj = new static;
        $obj->id   = $id;
        $obj->date = $date;
        $obj->time = $time;
        $obj->task = $task;

        return $obj;
    }
    public function create()
    {
        if (!empty($this->id)) {
            return database::modif($this);
        } else {
            return database::create($this);
        }
    }

    public static function showAll()
    {
        return database::showAll();
    }

    public static function getById($id)
    {
        return database::getById($id);
    }

    public static function delete($id)
    {
        return database::delete($id);
    }
}