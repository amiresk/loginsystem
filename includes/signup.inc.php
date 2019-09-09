<?php

if(isset($_POST['submit'])){
  
        include_once 'dbh.inc.php';

        $first = mysqli_real_escape_string($conn, $_POST['first']);
        $last = mysqli_real_escape_string($conn,  $_POST['last']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $uid = mysqli_real_escape_string($conn,  $_POST['uid']);
        $pwd = mysqli_real_escape_string($conn,  $_POST['pwd']);
        

//        $first = $conn->real_escape_string($_POST['first']);
//        $last = $conn->real_escape_string($_POST['last']);
//        $email = $conn->real_escape_string($_POST['email']);
//        $uid = $conn->real_escape_string($_POST['uid']); 
//        $pwd = $conn->real_escape_string($_POST['pwd']);
        


        // Error handler
        //Check for empty field
        if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)){

               header("Location: ../signup.php?signup=empty");
               echo '<script language="javascript">';
               echo 'alert(message successfully sent)';  //not showing an alert box.
               echo '</script>';

               exit(); 
        }else{      
            //check if iput charachter are valid
               if(!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/",$last)){
                    header("Location: ../signup.php?signup=invalid");
                    exit(); 
              }else{
                    //check if email valid
                    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){

                          header("Location: ../signup.php?signup=invalid_email");
                          exit();

                    }else{

                            $sql = "SELECT * FROM users WHERE user_uid='$uid'";
                            $result = mysqli_query($conn, $sql);
                            $resultCheck = mysqli_num_rows($result);

                        if($resultCheck >0){

                            header("Location: ../Signup.php?signup=usertaken");
                            exit();
                       
                        }else{
                                //hashing the password
                                 $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT);
                                 echo '<p>'.$hashedPwd.'</p>';
                                //inser the user into the database
                                 $sql2 = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$uid', '$hashedPwd');";
                                 mysqli_query($conn, $sql2);
                                header("Location: ../signup.php?signup=success");
                                exit();

                     }
                 }
             }
            }
            mysqli_close($conn);
            header("Location: ../index.php");
            exit();
    
}else{
    header("Location: ../signup.php");
    exit();
}


