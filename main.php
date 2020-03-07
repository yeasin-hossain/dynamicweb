<?php
session_start();
$mysqli = new mysqli('localhost', 'root', '', 'movie')or die (mysqli_error($mysqli));

// header scontrol section


if(isset($_POST['for_header'])){

    $id = 1; 
    $header = $_POST['header'];

    if(!empty($header)){
        $mysqli->query("UPDATE topbar SET heading='$header' WHERE id=$id")or die($mysqli->error);
        
    }
    header("location: control_html.php");
    
}

// menu scontrol section

if(isset($_POST['for_menu'])){

    $id = 1;
    $menu1 = $_POST['menu1'];
    $menu2 = $_POST['menu2'];
    $menu3 = $_POST['menu3'];
    $menu4 = $_POST['menu4'];
    $menu5 = $_POST['menu5'];
    $menu6 = $_POST['menu6'];

    if(!empty($menu1)){
        $mysqli->query("UPDATE menubar set menu1='$menu1', menu2='$menu2', menu3='$menu3', menu4='$menu4', menu5='$menu5', menu6='$menu6'
        WHERE id=$id")or die($mysqli->error);
    }
    header("location: control_html.php");
}

?>