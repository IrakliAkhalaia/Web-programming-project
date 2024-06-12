<?php
    if(isset($_COOKIE['Username_cookies']) && isset($_COOKIE['Password_cookies'])){
        setcookie('Username_cookies', null, time()-1);
        setcookie('Password_cookies', null, time()-1);
        header("refresh: 0.5; url=main_page.php");
    }
?> 