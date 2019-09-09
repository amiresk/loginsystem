
<!DOCTYPE html>

<html>
    <head>
        
        
        <link rel='stylesheet' type="text/css" href="style.css">
        <title>A-EAZI Thrift Source ...</title>
   <?php
      session_get_cookie_params();
   ?>   
        
    </head>
    <body>
        
        <header> 
            <nav>
                <div class="main-wrapper">
                        <ul>
                            <li><a href="index.php"> Home  </a></li>
                            <li><a href="products.php"> Products  </a></li>
                            <li><a href="about.php"> About  </a></li>
                            <li><a href="contact.php"> Contact  </a></li>
                        </ul>
                    
     
                     <div id="login" class="nav-login">
                            <form action="includes/login.inc.php" method="POST">
                                <input type="text" name="uid" placeholder="Username/e-mail">
                                <input type="password" name="pwd" placeholder="password">
                                <button type="submit" name="submit">Login</button>
                                <a href="signup.php">Sign up</a>   
                            </form>   
                     </div>
                     <!--?php 
                            echo "<div id='demo'></div>"; 
                     ?--> 
                </div>
            </nav>  
            

        </header>
        
<!--     <script>
      //$_SESSION["username"]
      var username = '$_SESSION["username"]';
      document.getElementById("demo").innerHTML= username;

    </script>-->