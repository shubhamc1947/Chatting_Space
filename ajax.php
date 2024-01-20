<?php
$conn=mysqli_connect("localhost","root","mysql","chattingspace") or die("Did not Connect with database");

session_start();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["action"]) && $_POST["action"] === "chatspace") {
        // Parse the serialized form data
        parse_str($_POST["form"], $formData);

        // Now $formData is an associative array containing the form data
        // Access individual form fields using the keys of $formData
        $revid = $formData["recvid"];
        $msg = $formData["sendmsg"];
        $sendid=$_SESSION['userid'];

        $sql="INSERT INTO `message`(`rev_id`, `sent_id`, `msg`, `status`, `created_by`, `creation_time`) VALUES ('{$revid}','{$sendid}','{$msg}','1','
        {$_SESSION['userid']}','".date('d-m-Y H:i:s')."')";

        $res=mysqli_query($conn,$sql);
        if($res){
            echo '1';
        }else{
            echo "0";
        }
        
       
    } else if(isset($_POST["action"]) && $_POST["action"]==="showlobby"){
        $onlinesql="SELECT * FROM user WHERE status='ONLINE' and sno !='{$_SESSION['userid']}'";
        $onlineres=mysqli_query($conn,$onlinesql);
        if(mysqli_num_rows($onlineres)>0){
            echo "<p style='text-align:center;color:#222;font-size:0.9rem;'>Online Members</p>";
            while($onlinerow=mysqli_fetch_assoc($onlineres)){?>
                <a href="chatspace.php?reciv=<?php echo $onlinerow['sno']?>" >
                    <div class="chat-person">
                        <div class="chat-person-dp">
                            <!-- <img src="img\web_img\1.jpeg" alt="chat person img"> -->
                            <?php
                                if($onlinerow['gender']=="Male"){?>
                                    <img src="img\male.png" alt="Profile image">
                                <?php
                                }else if($onlinerow['gender']=="Female"){?>
                                    <img src="img\female.png" alt="Profile image">
                                <?php  
                                }else{?>
                                    <img src="img\other.png" alt="Profile image">
                                <?php
        
                                }
                            ?>
                            <div class="chat-person-head">
                                <div class="chat-person-name">
                                    <?php
                                        echo $onlinerow['first_name']." ".$onlinerow['last_name'];
                                    ?>
                                </div>
                                <div class="chat-person-msg">
                                    No messages Till Now
                                </div>
                            </div>
                        </div>
                        
                        <div class="chat-person-active">
                            <div class="active"></div>
                        </div>
                    </div>
                </a>
        <?php   
                }
        }
        
        $offlinesql="SELECT * FROM user WHERE status='OFFLINE' and sno !='{$_SESSION['userid']}'";
        $offlineres=mysqli_query($conn,$offlinesql);
        if(mysqli_num_rows($offlineres)>0){
            echo "<p style='text-align:center;color:#222;font-size:0.9rem;'>Offline Members</p>";
            while($offlinerow=mysqli_fetch_assoc($offlineres)){?>
                <a href="chatspace.php?reciv=<?php echo $offlinerow['sno']?>" >
                    <div class="chat-person">
                        <div class="chat-person-dp">
                            <!-- <img src="img\web_img\1.jpeg" alt="chat person img"> -->
                            <?php
                                if($offlinerow['gender']=="Male"){?>
                                    <img src="img\male.png" alt="Profile image">
                                <?php
                                }else if($offlinerow['gender']=="Female"){?>
                                    <img src="img\female.png" alt="Profile image">
                                <?php  
                                }else{?>
                                    <img src="img\other.png" alt="Profile image">
                                <?php
        
                                }
                            ?>
                            <div class="chat-person-head">
                                <div class="chat-person-name">
                                    <?php
                                        echo $offlinerow['first_name']." ".$offlinerow['last_name'];
                                    ?>
                                </div>
                                <div class="chat-person-msg">
                                    No messages Till Now
                                </div>
                            </div>
                        </div>
                        
                        <div class="chat-person-active">
                            <div class="deactive"></div>
                        </div>
                    </div>
                </a>
        <?php   
                }
        }
    }else  if (isset($_POST["action"]) && $_POST["action"] === "chatshow") {
            $msg="SELECT * from message WHERE (rev_id='{$_POST['recivid']}' and sent_id='{$_SESSION['userid']}') OR (sent_id='{$_POST['recivid']}' and rev_id='{$_SESSION['userid']}') ORDER BY creation_time";
            $res=mysqli_query($conn,$msg);
            if(mysqli_num_rows($res)>0){
                $historymsg="";
                while($row=mysqli_fetch_assoc($res)){
                    if($row['sent_id']==$_SESSION['userid']){
                            
                        $historymsg.="<div class='msg sent'>{$row['msg']}</div>";
                    
                    }else{
                        $historymsg.="<div class='msg received'>{$row['msg']}</div>";
                    }
                }
                echo $historymsg;
            }else{
                echo  '<div class="nomsg">
                    No Message Yet with this user
                </div>';       
            }

    } else {
        echo 'Invalid action';
    }
} else {
    echo 'Invalid request method';
}




?>
<?php


?>

