<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="everything_in_one.css">
    <link rel="icon" href="images/tab image.ico">
    <link href="http://fonts.cdnfonts.com/css/matrix" rel="stylesheet">
    <title>About Creator</title>
</head>
<body class="main_page_body">
    <div class="main_page_div">
        <header class="main_page_header">
            <div class="main_page_name" id="main_page_name">
                <a href="main_page.php">
                    <h1>The MATRIX</h1>
                </a>
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
        <div class="info_about_me">
            <img class="me" id="me" src="images/me.png" alt="Creator">
            <p> Hello I'm Irakli Akhalaia and I'm huge fan of "The Matrix (franchise)".
                Recently came the fourth part of franchise which disappointed me.
                So I decided to make a website out of it. To remember that old 
                atmosphere and characters. <br>
                I'm 2nd course student of Tbilisi State University Computer Science faculty.
            </p>
        </div>
        <div>
            <img class="glasses" id="glasses" src="images/glasses.png" alt="Glasses">
        </div>
    </div>
    <script type="text/javascript" src="matrix.js"></script>
</body>
</html>