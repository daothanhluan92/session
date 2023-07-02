<?php
class SessionController{
    public $link;
    public function getURL(){
        $this->link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $this->link = explode('/',$this->link)[4];
        return $this->link;
    }
    public function checkValidName(){
        switch($this->link=='home_page.php'){
            case !isset($_SESSION['name']):
                $this->redirect('../view/login.php');
                break;
            case isset($_SESSION['name']):
                return true;
                break;
            }
        switch($this->link=='login.php'){
            case !isset($_SESSION['name']):
                return true;
                break;
            case isset($_SESSION['name']):
                $this->redirect('../view/home_page.php');
                break;
                }
        }
        public function redirect($location){
            header('location:'.$location);
        }
     }
$init = new SessionController();
$url = $init->getURL();
if($url=='home_page.php' || $url=='login.php'){
    $init->checkValidName();
}

