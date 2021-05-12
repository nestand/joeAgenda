<?php

/**
 * Class Autoloader of our app
 */
class Autoloader{

    /**
     * Safe this autoloader
     */
    static function register(){
        spl_autoload_register(array(__CLASS__, 'autoload'));
    }

    /**
     * Include the file that corresponds to a class
     * * @param $class string, the name of the class to load
     */
    static function autoload($class){
        require_once 'include/class/' . $class . '.class.php';
    }

}