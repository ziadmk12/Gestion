<?php
session_start();
include_once 'include/header.php'; ?>

  
   
<?php //echo "<div class='text-center'>Admin Page</div>";
echo 'Email :' .$_SESSION['email'].'<br>';
echo 'Password :' . $_SESSION['pass'];

?>
<?php include_once 'include/footer.php'; ?>

 
 