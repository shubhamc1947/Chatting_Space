<?php
   include('header.php');
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //   $name = test_input($_POST["name"]);
    //   $email = test_input($_POST["email"]);
    //   $website = test_input($_POST["website"]);
    //   $comment = test_input($_POST["comment"]);
    //   $gender = test_input($_POST["gender"]);
    // }
    
$fname = $email = $pass = $lname = "";
function checkinput($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


if(isset($_POST['submit'])){
    $fname=checkinput($_POST["fname"]);
    $lname=checkinput($_POST["lname"]);
    $email=checkinput($_POST["email"]);
    $pass=checkinput($_POST["password"]);
    $gender=checkinput($_POST["gender"]);

    $checkemail="SELECT * from user WHERE email='{$email}'";
    $checkemailres=mysqli_query($conn,$checkemail);
    if(mysqli_num_rows($checkemailres)>0){
        $msg="<div alert alert-danger>Email already Exist</div>";
    }else{
        
        echo $sql="INSERT INTO `user`(`first_name`, `last_name`, `email`, `password`,`gender`) VALUES ('{$fname}','{$lname}','{$email}','{$pass}','{$gender}')";
        $res=mysqli_query($conn,$sql);
        if($res){
            echo "HELO";
            $_SESSION['username']=$email;
            $_SESSION['userid']=mysqli_insert_id($conn);
            $_SESSION['session_id']= uniqid();
            $_SESSION['st_time']=date("d-m-Y H:i:s");

            
            // echo $sessionsql="INSERT INTO `session`(`username`, `userid`, `session_id`, `st_time`) VALUES ({'$_SESSION['username']'},{'$_SESSION['userid']'},{'$_SESSION['session_id']'},{'$_SESSION['st_time']'})";
            $sessionsql = "INSERT INTO `session` (`username`, `userid`, `session_id`, `st_time`) 
               VALUES ('" . $_SESSION['username'] . "', '" . $_SESSION['userid'] . "', '" . $_SESSION['session_id'] . "', '" . $_SESSION['st_time'] . "')";

// $sessionres = mysqli_query($conn, $sessionsql);

            $sessionres=mysqli_query($conn,$sessionsql);
            if($sessionres){
                // echo "HELLO";
                $onlinesql="UPDATE user SET status='ONLINE' WHERE sno={$_SESSION['userid']}";
                if(mysqli_query($conn,$onlinesql)){
                    header("location: chatlobby.php");
                }
            
            }
        }
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital@0;1&family=Montserrat:ital@0;1&family=Nova+Square&family=Poppins:ital,wght@0,400;0,500;1,400&family=Roboto:ital,wght@0,400;0,700;1,400;1,500&family=Square+Peg&family=Whisper&display=swap" rel="stylesheet">


    <!-- custom css -->
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/signup.css">

  </head>
  <body>
    
    <div class="signup-cont">
        <div class="signup-wrap">
            <form id="" action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                <div class="form-header ">
                    Chatting Space 
                    <div class="or">
                        SC
                    </div>
                </div>
                <!-- <div class="error-cont">
                    <div class="errorbox" id="errorbox">All input field required</div>
                </div> -->
                <div class="name-cont input-cont-padding">
                    <div class="fname-cont">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" required>
                    </div>
                    <div class="lname-cont">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" required>
                    </div>
                </div>
                <div class="email-cont input-cont-padding">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="password-cont input-cont-padding">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="gender input-cont-padding">
                    <label for="" style="display:inline;">Gender</label>
                    <select name="gender" id="gender" style="width:50%;height:24px;font-size:1.1rem;color:#333;" >
                        <option value="" selected disabled>--Select--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Other">Other</option>
                    </select>
                    <!-- Male : <input type="radio" name="gender" id="male" value="Male"  >
                    Female : <input type="radio" name="gender" id="female" value="Female" > -->
                </div>
                <!-- <div class="image-cont input-cont-padding">
                    <label for="image">Select Image</label>
                    <input type="file" name="image" id="image">
                </div> -->
                <div class="submit-cont input-cont-padding">
                    <input type="submit" value="Let's Chat" name="submit">
                </div>
                <div class="already-signin input-cont-padding">
                    Already signed up? <a href="index.php">Log in</a>
                </div>
            </form>
        </div>
    </div>
   
    
  </body>
</html>
