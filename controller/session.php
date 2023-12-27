<?php
session_start();
if(isset($_POST['start'])){
    $username = $_POST['userName'];
    $_SESSION['user_name'] = $username;
    header('location: ../view/rules.php');


}
function Scoring(){
    $points = 100;
    $score = 0;
    $score = $points +$score;
    $score = $_SESSION['user_score'];
    return $score;

} 





