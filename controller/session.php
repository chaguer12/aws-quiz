<?php
session_start();
if(isset($_POST['start'])){
    $username = $_POST['userName'];
    $_SESSION['user_name'] = $username;
    header('location: ../view/rules.php');


}
//*********************************** */



