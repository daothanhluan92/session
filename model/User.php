<?php 
session_start();
?>
<?php
class User{
    public function checklogin($user,$Pwd){
        if($user == 'daoluan' && $Pwd == '123456'){
            $_SESSION['name'] = $user;
            return true;
        }else{
            return false;
        }
    }
}
