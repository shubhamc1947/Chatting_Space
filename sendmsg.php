<?php
$conn=mysqli_connect("localhost","root","mysql","chattingspace") or die("Did not Connect with database");

session_start();



if($_POST['show']!=""){

    print_r($_POST);
    

<div class="msg received">
    This is Get message
</div>
                    
}else{

    print_r($_POST);
    
    

}
?>