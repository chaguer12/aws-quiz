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
<body>
    <header >
        <div class="w-3/4 mx-auto  mt-4  bg-gray-200 rounded-full ">
            <div id="progress_bar" class="h-full bg-yellow-400" style="width:10%;min-height: 10px;">

            </div>
            
        </div>

    </header>
    <section class="flex items-center justify-center min-h-full my-16">
        <form action="controller/session.php" onsubmit="updateProgress()" method="post" enctype="multipart/form-data " class="bg-white p-8 rounded shadow-lg max-w-md w-full ">

            <h1 class="font-serif text-xl text-center mb-6">Welcome <?php echo $_SESSION['user_name'];?></h1>
            <h2 class="font-serif text-lg ">Rules:</h2>
            <ul>
                <li>
                   <div>
                        <p class="p-4 text-sm">&#9658; The quiz will include multiple-choice question.</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="p-4 text-sm">&#9658; Each question must be answered within a specified time limit.</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="p-4 text-sm">&#9658; Points are awarded for each correct answer.</p>
                    </div>
                </li>
                <li>
                    <div>
                        <p class="p-4 text-sm">&#9658; Results will be announced at the end of the quiz.</p>
                    </div>

                </li>
            </ul>
            <button type="submit" name="go" class="w-full px-4 py-2 my-6 text-white bg-yellow-500 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-opacity-50">
                    Start Quiz!
                </button>
                   

        </form>
        
      
    </section>
    

    
</body>
</html>