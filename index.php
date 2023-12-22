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

<body class="">

    <header>
        <nav class="flex justify-end p-4">
            <!-- Add navigation links here if needed -->
        </nav>
    </header>

    <section class="flex items-center justify-center min-h-screen">
        <form action="your_processing_script.php" method="post" enctype="multipart/form-data " class="bg-white p-8 rounded shadow-lg max-w-md w-full">

            <h1 class="font-serif text-2xl text-center mb-6">Dear Participant</h1>
            <div>
                <img src="view/images/logo.png" class="w-32 h-32 mx-auto">
            </div>
            <p class="font-serif text-4xl text-center">Welcome to AWS Cloud Practitioner Quiz</p>

            <div class="mt-4">
                <input type="text" name="name" placeholder="User name" class="w-full px-4 py-2 border rounded focus:outline-none focus:border-blue-500">
            </div>

            <div class="mt-6">
                <button type="submit" name="submit" class="w-full px-4 py-2 text-white bg-yellow-500 rounded hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-600 focus:ring-opacity-50">
                    Start Quiz!
                </button>

            </div>

            <p class="mt-4 text-center text-gray-600">Good luck!</p>

        </form>
    </section>

</body>

</html>