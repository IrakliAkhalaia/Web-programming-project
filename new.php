<?php
    if(isset($_COOKIE['Username_cookies']) && isset($_COOKIE['Password_cookies'])){
?>
<li id="exit"><a href="logout.php">LOG OUT</a></li>
<?php  if($_COOKIE['Admin_cookies']=="isadmin"){ ?>
<li id="admin"><a href="admin_page.php">ADMIN</a></li>
<?php  }}   else{   ?>
    <li id="enter"><a href="login.php">LOG IN</a></li>
    <li id="registration"><a href="registration.php">SIGN UP</a></li>
<?php
}
?>
