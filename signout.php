<?php
include('header.php');
echo "<pre>";
print_r($_SESSION);
echo "</pre>";


$entime=date("d-m-Y H:i:s");

echo $updatesessionsql="UPDATE session SET en_time='{$entime}' WHERE session_id='{$_SESSION['session_id']}'";
$updatesessionres=mysqli_query($conn,$updatesessionsql);
if($updatesessionres){

    $onlinesql="UPDATE user SET status='OFFLINE' WHERE sno={$_SESSION['userid']}";
    if(mysqli_query($conn,$onlinesql)){
        // remove all session variables
        session_unset();
        // destroy the session
        session_destroy();
        header("location: index.php");
    }

    
   
}


?>