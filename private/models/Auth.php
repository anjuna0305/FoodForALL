<?php

class Auth{
    public static function authenticate($row){
        
        $_SESSION['USER'] = $row;
        print_r($_SESSION['USER']);
    }

    public static function logout(){
        if(isset($_SESSION['USER'])){

            unset($_SESSION['USER']);
        }
    }
    
    public static function logged_in(){
        if(isset($_SESSION['USER'])){
            return true;
        }
        return false;
    }
    public static function __callStatic($method,$params){

        $prop = strtolower(str_replace("get","",$method));
        
        if(isset($_SESSION['USER'])) {
            return $_SESSION['USER']->$prop;
            
        }
        return "Unknown";

    }
}

