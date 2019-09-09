<?php

session_start();

if(isset($_POST['submit'])){

    include_once 'dbh.inc.php';
    
     $uid = mysqli_real_escape_string($conn, $_POST['uid']);
     $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
     
     $sql = "SELECT user_uid, user_pwd FROM users WHERE user_uid = '$uid'";
     
     $result= mysqli_query($conn, $sql);
     print_r($result);
     echo'<br>';
      
    if($result == false) {
      echo '<a Error: cannot execute query</a>';
      exit;
        }
        
     $num_rows = mysqli_num_rows($result);
     print_r($num_rows);
     echo'<br>';
     
     if($num_rows ==1){
               $data = mysqli_fetch_array($result);
              print_r($data);
              echo'<br>';
              if( password_verify($pwd , $data['user_pwd'])){
                   
                    $_SESSION["logon"]="OK";
                    $_SESSION["username"]= $uid;
                   
                    header("Location: ../index.php");
            }else{
         

                    header("Location: ../signup.php");
                 } 
       }else{
               header("Location: ../signup.php");
               mysql_free_result($result);
              
       }
}