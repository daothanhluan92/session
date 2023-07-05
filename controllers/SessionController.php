<?php
class SessionController{
    public function createSession(){
        session_start();
    }
    public function deleteSession($name){
        unset($_SESSION[$name]);
    }
    public function checkValidSession($name){
        if(!empty($_SESSION[$name])){
            return true;
        }else{
            return false;
        }
    }
     }
$init = new SessionController();

