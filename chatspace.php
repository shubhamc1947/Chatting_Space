<?php
    include('header.php');
?>
<input type="text" name="" value="" id="">
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chatting Space</title>
    <!-- custom css -->

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/chatspace.css">
  </head>
  <body>
    
    <div class="chatlobby-cont">
        <div class="chatlobby-wrap">
            <?php 
                $recisql="SELECT * FROM user WHERE sno={$_GET['reciv']}";
                $recires=mysqli_query($conn,$recisql);
                $recirow=mysqli_fetch_assoc($recires);
            ?>
            <div class="profile-header">
                <div class="profile-dp">
                    <?php
                        if($recirow['gender']=="Male"){?>
                            <img src="img\male.png" alt="Profile image">
                        <?php
                        }else if($recirow['gender']=="Female"){?>
                            <img src="img\female.png" alt="Profile image">
                        <?php  
                        }else{?>
                            <img src="img\other.png" alt="Profile image">
                        <?php

                        }
                    ?>
                </div>
                <div class="profile-name">
                    <div class="name"><?php echo $recirow['first_name']." ".$recirow['last_name'];?></div>
                    <div class="status">
                        I believe in power of words
                        
                    </div>
                </div>
               
                <div class="lobby">Chat</div>
            </div>

            <div class="chat-lobby">
                <div class="chatting-cont" id="chatcont"> 
                </div>
            </div>
            <div class="sendmsg">
                <form id="form">
                    <input type="text" name="sendmsg" id="sendmsg" placeholder="Let's Chat">
                    <div class="sendmsgbtn">
                        <input type="hidden" name="recvid" value="<?php echo $_GET['reciv']?>">
                        <input type="submit" id="submit" value="Submit" name="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
   <script>
    $(document).ready(function(){

            // Assuming you have just added new content to your container
            $('#chatcont').scrollTop($('#chatcont')[0].scrollHeight);

            // console.log("yes");
            function showmsgcont(recivid) {
                $.ajax({
                    url: "ajax.php",
                    type: "POST",
                    data: { action: "chatshow", recivid: recivid },
                    success: function (data) {
                        $("#chatcont").html(data).slideDown();
                    }
                });
            }

            // Call the function with the recivid value
            showmsgcont(<?php echo $_GET['reciv']; ?>);

            $("#submit").on("click",function(e){
                console.log("clicked");
                e.preventDefault();
               
                $.ajax({
                    url:"ajax.php",
                    type:"POST",
                    data:{action:"chatspace",form:$("#form").serialize()},
                    success:function(data){
                     
                        $("#form").trigger("reset");
                        showmsgcont(<?php echo $_GET['reciv']; ?>);
                        
                    }
                })
                
            });
        })
   </script>
  </body>
</html>