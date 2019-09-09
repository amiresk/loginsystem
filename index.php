<?php
session_start();
?>
<?php

    include_once 'header.php';

?>
        
<section class="main-container">
    <div class="main-wrapper">
        <h2>Home</h2> 
       
        <?php
            print_r($_SESSION["username"]);
        ?>
        
    </div> 
</section>

<?php

    include_once 'footer.php';

?>

