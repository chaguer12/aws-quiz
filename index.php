<?php




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="view/style/style.css">
    <link rel="shortcut icon" type="image/jpg" href="view/images/favicon-32x32.png">
    <title>AWS Cloud Practitioner Quiz</title>
</head>

<body>

    <header >
        <div class="w-3/4 mx-auto  mt-4  bg-gray-200 rounded-full ">
            <div id="progress_bar" class="h-full bg-yellow-400" style="width:10%;min-height: 10px;">

            </div>
            
        </div>

    </header>

    <section class="flex items-center justify-center min-h-full my-16">
        <form action="controller/session.php"  method="post" enctype="multipart/form-data " class="bg-white p-8 rounded shadow-lg max-w-md w-full">

            <h1 class="font-serif text-2xl text-center mb-6">Dear Participant</h1>
            <div>
                <img src="view/images/logo.png" class="w-32 h-32 mx-auto">
            </div>
            <p class="font-serif text-4xl text-center">Welcome to AWS Cloud Practitioner Quiz</p>

            <div class="mt-4">
                <input type="text" name="userName" placeholder="User name" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
            </div>

            <div class="mt-6">
                <button type="submit" name="start" class="w-full px-4 py-2 text-white bg-yellow-500 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-opacity-50">
                  Start Quiz!
                </button>

            </div>

           

        </form>
        
      
    </section>
    <footer>
    <div class="flex justify-center mx-auto w-1/4 ">
    <div class="w-10 mx-auto  mt-4  bg-gray-200 rounded-full ">
            <div  class="h-full bg-yellow-400 rounded-full" style="width:100%;min-height: 10px;"> </div>
            
        </div>
    <div class="w-10 mx-auto  mt-4  bg-gray-200 rounded-full  ">
            <div  class="h-full bg-yellow-400 rounded-full" style="width:0%;min-height: 10px;">

            </div>
            
        </div>
    <div class="w-10 mx-auto  mt-4  bg-gray-200 rounded-full ">
            <div  class="h-full bg-yellow-400 rounded-full" style="width:0%;min-height: 10px;">

            </div>
            
        </div>

    </div>
 
     
</footer>

   
<script src="view/javascript/progress.js"></script>
<script> updateProgressBar()</script>
</body>

</html>