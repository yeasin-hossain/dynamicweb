<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body>
    <div class="container mx-auto">

    <?php
    $mysqli = new mysqli('localhost', 'root', '', 'movie')or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM menubar")or die($mysqli->error);
    
    ?>

    <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
    <div class="flex items-center flex-shrink-0 text-white mr-6">

    <?php 
    while ($row = $result->fetch_assoc()): ?>

    <span class="font-semibold text-xl tracking-tight"> <?php echo $row['menu1']; ?> </span>

    </div>

  <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">

    <div class="text-sm lg:flex-grow">

      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
      <?php echo $row['menu2']; ?>
      </a>

      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
      <?php echo $row['menu3']; ?>
      </a>

      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
      <?php echo $row['menu4']; ?>
      </a>
      
      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
      <?php echo $row['menu5']; ?>
      </a>

      <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">
      <?php echo $row['menu6']; ?>
      </a>
    </div>
    <?php endwhile ?>
  </div>
</nav>
</div>
</body>
</html>