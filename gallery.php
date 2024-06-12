<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="everything_in_one.css">
    <link rel="icon" href="images/tab image.ico">
    <link href="http://fonts.cdnfonts.com/css/matrix" rel="stylesheet">
    <title>Gallery</title>
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
        <div class="gallery_row1">
            <div class="column">
                <img class="flying_neo" id="flying_neo" src="images/flying_neo.jpg" alt="Flying Neo">
            </div>
            <div class="column">
                <img class="seraph" id="seraph" src="images/seraph.jpg" alt="Seraph">
            </div>
            <div class="column">
                <img class="merovingian" id="merovingian" src="images/merovingian.jpg" alt="Merovingian">
            </div>
        </div>
        <?php
            $ragaca = "A";
            if(isset($_COOKIE['Username_cookies']) && isset($_COOKIE['Password_cookies'])){
                $ragaca = "main_page_div2";
                
        }?>
        <div class="gallery_row2" id="<?php echo $ragaca;?>">
            <div class="column1" id="column1">
                <a href="make_choice.php"><img class="matrix_creator" id="matrix_creator" src="images/matrix_creator.png" alt="Matrix Creator"></a>
            </div>
            <div class="column1">
                <a href="make_choice.php"><img class="neo_and_bullets" id="neo_and_bullets" src="images/neo_and_bullets.jpg" alt="Neo and Bullets"></a>
            </div>
            <div class="column1">
                <a href="make_choice.php"><img class="smith" id="smith" src="images/smith.jpg" alt="Smith"></a>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="matrix.js"></script>
</body>
</html>