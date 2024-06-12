<?php
    if(isset($_POST['login'])){
        $server = "localhost";
        $username = "root";
        $password = "";
        $data_base_name = "mydatabase";

        $conn = mysqli_connect($server, $username, $password, $data_base_name);

        if(!$conn){
            die("Connection failed".mysqli_connect_error());
        }

        $login_user = stripcslashes($_POST["login_user"]);
        $login_user = mysqli_real_escape_string($conn, $login_user);
        
        $login_pass = stripcslashes($_POST["login_pass"]);
        $login_pass = mysqli_real_escape_string($conn, $login_pass);
        $login_pass = md5($login_pass);
        

        $sql = "SELECT * FROM registration WHERE Username='".$login_user."' AND Password='".$login_pass."'";
        
        $new_var = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($new_var) == 1){
            $row = mysqli_fetch_assoc($new_var);
            if($row['IsAdmin']== 1){
                setcookie('Admin_cookies', "isadmin", time()+1800);
            }else{
                setcookie('Admin_cookies', "isn't admin", time()+1800);
            }
            setcookie('Username_cookies', $login_user, time()+1800);
            setcookie('Password_cookies', $login_pass, time()+1800);
            header("refresh: 0.5; url=main_page.php");
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="everything_in_one.css">
    <link rel="icon" href="images/tab image.ico">
    <link href="http://fonts.cdnfonts.com/css/matrix" rel="stylesheet">
    <title>Login</title>
</head>
<body class="login_page_body">
    <div class="login_main_div">
        <h3 class="login_name">LOGIN</h3>
        <form action="login.php" method="post">
            <input id="login_username" name="login_user" autocomplete="off" type="text" spellcheck="false" placeholder="Userame" required>
            <input id="login_password" name="login_pass"autocomplete="off" type="password" placeholder="Password" minlength="8" required>
            <p id="caps_lock">Caps lock is ON!</p>
            <input id="login_checkbox" onclick="show_password_function()" type="checkbox"  name="check" value="Checkbox">
            <label for="login_checkbox"> Show password</label>
            <input id="login_button" name="login" type="submit" value="Login" >
        </form>
    </div>
    <script type="text/javascript" src="matrix.js"></script>
    <script>
        var input = document.getElementById("login_password");

        var text = document.getElementById("caps_lock");

        input.addEventListener("keyup", function(event) {
        if (event.getModifierState("CapsLock")) {
            text.style.display = "block";
            text.style.textAlign = "center";
        } else {
            text.style.display = "none"
        }
        });
    </script>
</body>
</html>