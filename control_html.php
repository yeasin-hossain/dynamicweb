<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Panel</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>


<body class="bg-green-600">

    <div class="container mx-auto flex justify-start">
        <!-- header option -->
    <form method="POST" action="main.php">
    <h1 class="text-2xl font-medium">Update your header</h1>

    <input type="text" name="header" placeholder="please enter header"  class="mt-8 bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block  appearance-none leading-normal" type="email">

    <button type="submit" name="for_header" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-5 rounded-full">
        Header
    </button>

    </form>

    </div>
    <!-- header option end -->

  <!-- menu option -->
     <section class="container mx-auto flex justify-start mt-10">
     <form method="POST" action="main.php">
        <h1 class="text-2xl font-medium">update your manu</h1>

        <input type="text" name="menu1" placeholder="please enter menu iteam"  class="mt-8 bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block  appearance-none leading-normal" type="email">
        <input type="text" name="menu2" placeholder="please enter menu iteam"  class="mt-8 bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block  appearance-none leading-normal" type="email">
        <input type="text" name="menu3" placeholder="please enter menu iteam"  class="mt-8 bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block  appearance-none leading-normal" type="email">
        <input type="text" name="menu4" placeholder="please enter menu iteam"  class="mt-8 bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block  appearance-none leading-normal" type="email">
        <input type="text" name="menu5" placeholder="please enter menu iteam"  class="mt-8 bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block  appearance-none leading-normal" type="email">
        <button type="submit" name="for_menu" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mt-5 rounded-full">
        Menu
    </button>
    </form>
     </section>
    
    




</body>
</html>




