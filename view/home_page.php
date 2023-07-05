<?php
include_once '../controllers/SessionController.php';
$init->createSession();
if($init->checkValidSession('name')==false){
    header('location:login.php');
    exit();
}
include_once 'header.php';
?>
<?php
echo '<h1 id="index-text">'."Welcome".'</h1>';
if ($init->checkValidSession('LAST_ACTIVITY') && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) {
    $init->deleteSession('name');
    }
    $_SESSION['LAST_ACTIVITY'] = time();
?>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="../js/reload.js"></script>
</head>
<?php
    include_once 'footer.php'
?>