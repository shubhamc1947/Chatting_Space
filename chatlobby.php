<?php
    include('header.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chatting Space</title>
    <!-- custom css -->
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/chatlobby.css">

  </head>
  <body>
    
    <div class="chatlobby-cont">
        <div class="chatlobby-wrap">
            <div class="form-header ">
                Chatting Space 
                <div class="or">
                    SC
                </div>
            </div>
            <?php 
                $userid=$_SESSION['userid'];
                $sql="SELECT * from user WHERE sno={$_SESSION['userid']}";
                $res=mysqli_query($conn,$sql);
                $row=mysqli_fetch_assoc($res);

            
            ?>
            <div class="profile-header">
                <div class="profile-dp">
                    <?php
                        if($row['gender']=="Male"){?>
                            <img src="img\male.png" alt="Profile image">
                        <?php
                        }else if($row['gender']=="Female"){?>
                            <img src="img\female.png" alt="Profile image">
                        <?php
                            
                        }else{?>
                            <img src="img\other.png" alt="Profile image">
                        <?php

                        }
                    ?>
                    
                </div>
                <div class="profile-name">
                    <div class="name"><?php echo $row['first_name']." ".$row['last_name'];?></div>
                    <div class="status">
                        I believe in power of words
                    </div>
                </div>
                <div class="profile-logout">
                    <a href="signout.php" class="">logout</a>
                </div>
                <div class="lobby">Lobby</div>
            </div>

            <div class="chat-lobby" id="chatLobby">
                <!-- <form action="<?php //$_SERVER['PHP_SELF']?>">
                    <input type="search" name="search" id="search" placeholder="Search a person for Chat">
                    <button><i class="fa-solid fa-magnifying-glass"></i> hello</button>
                </form> -->
                
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            console.log("All good");
            // function lobby(){
                $.ajax({
                    url:"ajax.php",
                    type:"POST",
                    data:{action:"showlobby"},
                    success:function(data){
                        $("#chatLobby").html(data);

                    }
                })
            // }
            // setTimeout(lobby,1000);
        })
    </script>
   
  </body>
</html>


<!-- // Example function to be executed after 2000 milliseconds (2 seconds)
function myFunction(param) {
    console.log("Function executed with parameter:", param);
}

// Set a timeout for 2000 milliseconds
setTimeout(myFunction, 2000, "Hello"); -->