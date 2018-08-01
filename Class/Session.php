<?php session_start();

Class Session{
    
    static function addToSession($key,$value){
        $_SESSION[$key] = $value;
    }
    
    static function removeFromSession($key){
        unset($key);
    }
    
    static function destroyAll(){
        unset($_SESSION);
    }
    
    static function isAuth() {
        if(isset($_SESSION['auth']) && $_SESSION['auth']){
            return true;
        }
        return false;
    }
}
