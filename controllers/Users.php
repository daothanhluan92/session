<?php include_once '../model/User.php'; 
include_once '../controllers/SessionController.php';
?>
<?php
class Users{
    private $user;
    private $Pwd;
    private $userModel;
    private $session;
    public function __construct()
    {
        $this->session =  new SessionController;
        $this->userModel = new User;
    }
    public function login(){
        $this->user = trim($_POST['name']);
        $this->Pwd = trim($_POST['usersPwd']);
        $check = $this->userModel->checklogin($this->user,$this->Pwd);
        if($check){
            $this->redirect('../view/home_page.php');
        }else{
            $this->redirect('../view/login.php');
        }
    }
    public function redirect($location){
        header('location:'.$location);
    }
    public function logout(){
        $this->session->deleteSession('name');
        $this->redirect('../view/login.php');
    }
}
$init = new Users();
if(!empty($_GET['q'])){
    $init->logout();
    exit();
}
$init->login();

