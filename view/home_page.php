<?php
session_start();
require_once '../controllers/SessionController.php';
include_once 'header.php';
?>
<?php
echo '<h1 id="index-text">'."Welcome".'</h1>';
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 300)) {
        session_unset();
        session_destroy();
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