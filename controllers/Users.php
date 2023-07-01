<?php require_once '../model/User.php'; ?>
<?php
class Users{
    private $user;
    private $Pwd;
    private $userModel;
    public function __construct()
    {
        $this->userModel = new User;
    }
    public function login(){
        $this->user = trim($_POST['name']);
        $this->Pwd = trim($_POST['usersPwd']);
        $check = $this->userModel->checklogin($this->user,$this->Pwd);
        if($check){
            $this->redirect('../home_page.php');
        }else{
            $this->redirect('../login.php');
        }
    }
    public function redirect($location){
        header('location:'.$location);
    }
    public function logout(){
        unset($_SESSION['name']);
        $this->redirect('../login.php');
    }
}
$init = new Users();
if(!empty($_GET['q'])){
    $init->logout();
    exit();
}
$init->login();

