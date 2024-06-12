<?php
    if(isset($_POST['sbmt'])){
        $server = "localhost";
        $username = "root";
        $password = "";
        $data_base_name = "mydatabase";

        $conn = mysqli_connect($server, $username, $password, $data_base_name);

        if(!$conn){
            die("Connection failed".mysqli_connect_error());
        }

        $fname = stripcslashes($_POST["fname"]);
        $fname = mysqli_real_escape_string($conn, $fname);

        $lname = stripcslashes($_POST["lname"]);
        $lname = mysqli_real_escape_string($conn, $lname);

        $usernm = stripcslashes($_POST["usernm"]);
        $usernm = mysqli_real_escape_string($conn, $usernm);

        $pass = stripcslashes($_POST["pass"]);
        $pass = mysqli_real_escape_string($conn, $pass);

        $gender = $_POST["gender"];

        $sql = "INSERT INTO registration(Name, Last_Name, Username, Password, Gender) VALUES('$fname', '$lname', '$usernm', '".md5($pass)."', '$gender')";
        mysqli_query($conn, $sql);
        header("refresh: 1; url=login.php");
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
    <title>Sign Up</title>
</head>
<body class="main_page_body">
    <div class="main_page_div">
        <header class="main_page_header">
            <div class="main_page_name" id="main_page_name">
                <a href="main_page.php"><h1>The MATRIX</h1></a>
            </div>
            <div class="main_page_buttons">
                <ul id="horizontal_list">
                    <li id="gallery"><a href="gallery.php">GALLERY</a></li>
                    <li id="creator"><a href="about_me.php">ABOUT CREATOR</a></li>
                    <?php
                        include('new.php')
                    ?>
                </ul>
            </div>
        </header>
        <div class="registration_div">
            <form action="registration.php" method="post">
                <input id="fname" name="fname" autocomplete="off" type="text" spellcheck="false" placeholder="Your name" maxlength="255" required>
                <input id="lname" name="lname" autocomplete="off" type="text" spellcheck="false" placeholder="Your last name" maxlength="255" required>
                <input id="username" name="usernm" autocomplete="off" type="text" spellcheck="false" placeholder="Userame" maxlength="255" required>
                <input id="password" name="pass" autocomplete="off" type="password" placeholder="Password" minlength="8" maxlength="255" required>
                <p id="caps_lock">Caps lock is ON!</p>
                <div class="radio_div">
                    <span>
                        <input id="male1" type="radio" name="gender" value="Male" required>
                        <label for="male1">Male</label>
                    </span>
                    <span>
                        <input id="female1" type="radio" name="gender" value="Female" required> 
                        <label for="female1">Female</label>
                    </span>
                    <span>
                        <input id="machine1" type="radio" name="gender" value="Machine" required> 
                        <label for="machine1">Machine</label>
                    </span>
                </div>
                <input id="submit_button" name="sbmt" type="submit" value="Submit" >
            </form>
        </div>
    </div>  
    <script type="text/javascript" src="matrix.js"></script>
    <script>
        // Get the input field
        var input = document.getElementById("password");
        // Get the warning text
        var text = document.getElementById("caps_lock");
        // When the user presses any key on the keyboard, run the function
        input.addEventListener("keyup", function(event) {
        // If "caps lock" is pressed, display the warning text
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