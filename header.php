<?php
$conn=mysqli_connect("localhost","root","mysql","chattingspace") or die("Did not Connect with database");

session_start();
date_default_timezone_set("Asia/Calcutta");   

if(!isset($_SESSION['username'])){
    if(basename($_SERVER['PHP_SELF'])!="index.php"){
        header("location: index.php");

    }
}


// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";


// if($_SESSION)

?>

<style>
    html{
        scroll-behavior: smooth;
    }
</style>

<!-- google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&family=Montserrat:ital@0;1&family=Nova+Square&family=Poppins:ital,wght@0,400;0,500;1,400&family=Roboto:ital,wght@0,400;0,700;1,400;1,500&family=Square+Peg&family=Whisper&display=swap" rel="stylesheet">

<!-- font awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- jquery -->
<script src="js/jquery.js"></script>

<?php


?>
