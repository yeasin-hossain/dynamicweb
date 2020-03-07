<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
<div class="container mx-auto ">
    
<?php 

    $mysqli = new mysqli('localhost', 'root', '', 'movie')or die(mysqli_error($mysqli));
    $result = $mysqli->query("SELECT * FROM topbar")or die($mysqli->error);

?>

<?php 
    while ($row= $result->fetch_assoc()): ?>
        <h1 class="bg-gray-500 text-5xl text-center"> <?php echo $row['heading']; ?> </h1>
<?php endwhile ?>

</div>
</body>
</html>
