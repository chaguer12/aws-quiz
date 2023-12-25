<?php
include '../controller/session.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" type="image/jpg" href="images/favicon-32x32.png">
    <title>Quiz Rules</title>
</head>
<header >
        <div class="w-3/4 mx-auto  mt-4  bg-gray-200 rounded-full ">
            <div id="progress_bar" class="h-full bg-yellow-400" style="width:<?php echo $newProgress; ?>%;min-height: 10px;">

            </div>
            
        </div>

</header>
<body>
<section class="flex items-center justify-center min-h-full  my-16">
<form action="controller/session.php"  method="post" enctype="multipart/form-data " class="bg-white p-8 rounded shadow-lg max-w-md w-full ">
</form>
</section>
    
</body>
</html>