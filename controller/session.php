<?php
function($username){
    if(isset($_POST['submit'])){
        $userName = $_SESSION['user_name'];
        return $userName;

    }
}
