<?php
require_once('../controller/qstController.php');
include '../controller/session.php';
$questionsCTRL = new QstController();
$getQst = $questionsCTRL->DisplayQuestions();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" type="image/jpg" href="images/favicon-32x32.png">
    <title>Questions</title>
</head>
<header >
        <div class="w-3/4 mx-auto  mt-4  bg-gray-200 rounded-full ">
            <div id="progress_bar" class="h-full bg-yellow-400" style="width:<?php echo $newProgress; ?>%;min-height: 10px;">

            </div>
            
        </div>

</header>
<body>

<p class="absolute text-lg font-semibold w-full mt-8 p-2 text-center">score:</p>
<section class="flex items-center justify-center min-h-full  my-16">

<div class="bg-white p-8 rounded shadow-lg w-3/4 my-8">
    <div class="flex justify-between ">
    <p class="font-mono mt-4">theme: <span class="text-sm font-mono text-gray-500">tst</span></p>
    <p class="font-mono mt-4 text-lg" id="countdown">30s</p> 
    <img src="images/logo.png" class="w-16 h-16">
    </div>
    <?php

foreach($getQst as $q){
?>
    <h1 class="text-center font-mono text-3xl font-semibold p-2"><?php echo $q->getQuestion(); }?></h1>
   <form action="../controller/logic.php" method="POST">
   
   <div>
        <ul class="grid grid-cols-2 gap-4  max-w-2xl mx-auto text-center mt-8">
            <li class="px-4 font-mono">
                <div>
                <input type="radio" name="response"  value="">
                c) Amazon EC2 instances can be launched on demand when needed.
                
            </div>
        </li>
            <li class="px-4 font-mono">
                <div>
                <input type="radio" name="response"  value="">
                c) Amazon EC2 instances can be launched on demand when needed.
                
            </div>
        </li>
            <li class="px-4 font-mono">
                <div>
                <input type="radio" name="response" value="">
                c) Amazon EC2 instances can be launched on demand when needed.
                
            </div>
        </li>
            <li class="px-4 font-mono">
                <div>
                <input type="radio" name="response" value="">
                c) Amazon EC2 instances can be launched on demand when needed.
                
            </div>
        </li>
            
        </ul>
        
    </div>
    <div class="flex justify-between mt-8">
        <p class="font-mono">
            
        </p>
        <button id="next" type="submit" name="next" class=" text-white bg-yellow-600 p-2 w-28 rounded-xl border border-yellow-600 hover:bg-white hover:text-yellow-600">
            Next
        </button>
    </div>
   </form>


    
</div>
</section>
<script src="javascript/timer.js"></script>
<script src="javascript/progress.js"></script>
<script> updateProgressBar(24)</script>  
</body>
</html>