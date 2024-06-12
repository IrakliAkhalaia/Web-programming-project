<?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $data_base_name = "mydatabase";

    $ID = "";
    $Name = "";
    $Lname = "";
    $Username = "";
    $Ueserpass = "";
    

    if(isset($_POST['find_button']) || isset($_POST['update_button'])){

        $conn = mysqli_connect($server, $username, $password, $data_base_name);

        if(!$conn){
            die("Connection failed".mysqli_connect_error());
        }

        $usernm = stripcslashes($_POST['user_USRNM']);
        $sql = "SELECT * FROM registration WHERE Username = '$usernm' ";
        $myquerry = mysqli_query($conn, $sql);
        $myrow = mysqli_fetch_assoc($myquerry);

        $Name = $myrow['Name'];
        $Lname = $myrow['Last_Name'];
        $Username = $myrow['Username'];
        $Ueserpass = $myrow['Password'];
        $ID = $myrow['ID'];
    }

    if(isset($_POST['delete_button'])){

        $conn = mysqli_connect($server, $username, $password, $data_base_name);

        if(!$conn){
            die("Connection failed".mysqli_connect_error());
        }

        $usernm = stripcslashes($_POST['user_USRNM']);
        $sql = "DELETE FROM registration WHERE Username = '$usernm' ";
        mysqli_query($conn, $sql);
    }


    if(isset($_POST['update_button'])){
        if($_POST['user_new_Name'] != ""){
            $Name = $_POST['user_new_Name'];
        }
        
        if($_POST['user_new_Last_Name'] != ""){
            $Lname = $_POST['user_new_Last_Name'];
        }

        $oldUsername = $Username;

        if($_POST['user_new_USRNM'] != ""){
            $Username = $_POST['user_new_USRNM'];
        }
        
        if($_POST['user_new_pass'] != ""){
            $Ueserpass = md5($_POST['user_new_pass']);
        }

        $sql = "UPDATE registration SET Username = '".$Username."',  Name = '".$Name."', Last_Name = '".$Lname."', Password = '".$Ueserpass."' WHERE ID='".$ID."' ";
        mysqli_query($conn, $sql);
    }

    if(isset($_POST['download_button'])){
        $conn = mysqli_connect($server, $username, $password, $data_base_name);

        if(!$conn){
            die("Connection failed".mysqli_connect_error());
        }

        $myFile = fopen("myFile.txt", "w");
        $sql = "SELECT * FROM registration";
        $userInfo = mysqli_query($conn, $sql);

        while($myrow = mysqli_fetch_assoc($userInfo)){
            fwrite($myFile, "First name: ".$myrow['Name']);
            fwrite($myFile, "\nLast name: ".$myrow['Last_Name']);
            fwrite($myFile, "\nGender: ".$myrow['Gender']);
            fwrite($myFile, "\nUsername: ".$myrow['Username']);
            fwrite($myFile, "\nPassword: ".$myrow['Password']."\n\n");
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
    <title>Admin page</title>
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
        <div class="admin_div">
            <form action="admin_page.php" method="post"> 
                <input id="user_USRNM" name="user_USRNM" value="<?php echo $Username; ?>" autocomplete="off" type="text" spellcheck="false" placeholder="User's username" maxlength="255">
                <input id="find_button" name="find_button" type="submit" value="Find">
                <input id="delete_button" name="delete_button" type="submit" value="Delete User">
                <input id="user_new_Name" name="user_new_Name" value="<?php echo $Name; ?>" autocomplete="off" type="text" spellcheck="false" placeholder="User's new name" maxlength="255">
                <input id="user_new_Last_Name" name="user_new_Last_Name" value="<?php echo $Lname; ?>" autocomplete="off" type="text" spellcheck="false" placeholder="User's new last name" maxlength="255">
                <input id="user_new_USRNM" name="user_new_USRNM" value="<?php echo $Username; ?>" autocomplete="off" type="text" spellcheck="false" placeholder="User's new username" maxlength="255">
                <input id="user_new_pass" name="user_new_pass" autocomplete="off" type="text" spellcheck="false" placeholder="User's new password" minlength="8" maxlength="255">
                <input id="update_button" name="update_button" type="submit" value="Update User">
                <input id="download_button" name="download_button" type="submit" value="Download users data">
            </form>
        </div>
    </div>
</body>
</html>