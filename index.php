<?php
include('header.php');
function checkinput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  $msg="";
  if(isset($_POST['submit'])){
      $email=checkinput($_POST["email"]);
      $pass=checkinput($_POST["password"]);
  
      $checkemail="SELECT * from user WHERE email='{$email}' and password='{$pass}'";
      $checkemailres=mysqli_query($conn,$checkemail);
      if(mysqli_num_rows($checkemailres)>0){
        $row=mysqli_fetch_assoc($checkemailres);
        $_SESSION['username']=$email;
        $_SESSION['userid']=$row['sno'];;
        $_SESSION['session_id']= uniqid();
        $_SESSION['st_time']=date("d-m-Y H:i:s");

        
        $sessionsql = "INSERT INTO `session` (`username`, `userid`, `session_id`, `st_time`) 
        VALUES ('" . $_SESSION['username'] . "', '" . $_SESSION['userid'] . "', '" . $_SESSION['session_id'] . "', '" . $_SESSION['st_time'] . "')";

        // $sessionres = mysqli_query($conn, $sessionsql);

        $sessionres=mysqli_query($conn,$sessionsql);
        if($sessionres){
            $onlinesql="UPDATE user SET status='ONLINE' WHERE sno={$row['sno']}";
            if(mysqli_query($conn,$onlinesql)){
                header("location: chatlobby.php");
            }
            // echo "HELLO";
        }
      }else{
          
          $msg="<div class='error-cont'>
                    <div class='errorbox'>Invalid Email OR Password</div>
                </div>";
      }
      // $sql=
  }
  
  
  


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chatting Space</title>
    <!-- google font -->
    
    <!-- custom css -->
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/index.css">

  </head>
  <body>
    
    <div class="login-cont">
        <div class="login-wrap">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div class="form-header ">
                    Chatting Space 
                    <div class="or">
                        SC
                    </div>
                </div>
                <?php echo $msg;?>
                <div class="email-cont input-cont-padding">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="password-cont input-cont-padding">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="submit-cont input-cont-padding">
                    <input type="submit" value="Let's Chat" name="submit">
                </div>
                <div class="already-signin input-cont-padding">
                    Not Yet signed up? <a href="signup.php">Sign Up</a>
                </div>
            </form>
        </div>
    </div>
   
  </body>
</html>