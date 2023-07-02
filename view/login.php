<?php
session_start();
include_once '../controllers/SessionController.php';
include_once 'header.php';
?>
    <h1 class="header">Please Login</h1>


    <form method="post" action="../controllers/Users.php">
        <input type="text" name="name"  
        placeholder="Username...">
        <input type="password" name="usersPwd" 
        placeholder="Password...">
        <button type="submit" name="submit">Log In</button>
    </form>


<?php
    include_once 'footer.php'
?>