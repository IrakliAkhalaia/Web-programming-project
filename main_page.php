<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="everything_in_one.css">
    <link rel="icon" href="images/tab image.ico">
    <link href="http://fonts.cdnfonts.com/css/matrix" rel="stylesheet">
    <title>ირაკლი ახალაია</title>
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
        <div class="main_page_div1">
            <div class="div_neo">
                <img class="neo" id="neo" src="images/neo.png" alt="Neo">
                <p> Neo (born as Thomas A. Anderson, also known as The One, an anagram for Neo) 
                    is a fictional character and the protagonist of The Matrix franchise, created 
                    by the Wachowskis. He was portrayed as a cybercriminal and computer programmer 
                    by Keanu Reeves in the films, as well as having a cameo in The Animatrix short 
                    film Kid's Story. Andrew Bowen provided Neo's voice in The Matrix: Path of Neo. 
                    In 2021, Reeves reprised his role in The Matrix Resurrections with what Vulture
                    calls "his signature John Wick look".
                </p>
            </div>
            <div class="div_morpheus">
                <img class="morpheus" id="morpheus" src="images/morpheus.png" alt="Morpheus">
                <p> Morpheus is a fictional character in The Matrix franchise. He is portrayed by 
                    Laurence Fishburne in the first three films, and in the video game The Matrix: 
                    Path of Neo, where his original actor was the only one to reprise his character's 
                    voice. In The Matrix Resurrections, an AI program based on him is portrayed by 
                    Yahya Abdul-Mateen II.
                </p>
            </div>
            <div class="div_trinity">
                <img class="trinity" id="trinity" src="images/trinity.png" alt="Trinity">
                <p> Trinity is a fictional character in the Matrix franchise. She is portrayed by 
                    Carrie-Anne Moss in the films. In the gameplay segments of Path of Neo, she is 
                    voiced by Jennifer Hale. Trinity first appears in the first film in the quadrilogy, 
                    The Matrix.
                </p>
            </div>
        </div>
        <?php
            $ragaca = "A";
            if(isset($_COOKIE['Username_cookies']) && isset($_COOKIE['Password_cookies'])){
                $ragaca = "main_page_div2";
                
        }?>
        <div class="main_page_div2" id="<?php echo $ragaca;?>"> 
            <div class="div_agentsmith">
                <img class="agentsmith" id="agentsmith" src="images/agentsmith.png" alt="Agent Smith">
                <p> Agent Smith (later simply Smith) is a fictional character and the main antagonist of 
                    The Matrix franchise. He was primarily portrayed by Hugo Weaving in the first trilogy 
                    of films and voiced by Christopher Corey Smith in The Matrix: Path of Neo (2005), with
                    Ian Bliss and Gideon Emery playing his human form, Bane, in the films and Path of Neo 
                    respectively. He also makes a cameo in the anime film The Animatrix (2003), voiced by 
                    Matt McKenzie.
                </p>
            </div>
            <div class="div_persephone">
                <img class="persephone" id="persephone" src="images/persephone.png" alt="Persephone">
                <p> Persephone is a fictional character in The Matrix franchise. She is portrayed by 
                    Monica Bellucci. In the films The Matrix Reloaded and The Matrix Revolutions, Persephone 
                    is the wife of the Merovingian. She seems bored with her existence in the Matrix, and is 
                    dissatisfied with her husband (possibly because of his constant infidelities).
                </p>
            </div>
            <div class="div_twins">
                <img class="twins" id="twins" src="images/twins.png" alt="The Twins">
                <p> The twins (portrayed by identical twins Neil and Adrian Rayment), are henchmen of 
                    the Merovingian. They are believed to be older versions of Agents from a previous 
                    iteration of the Matrix, before they became "Exiles", or rogue programs.
                </p>
            </div>
        </div>
        <footer class="main_page_footer">
            <div class="contact_info">
                <p class="contact_info1">Contact us: irakli.akhalaia820@ens.tsu.ge</p>
            </div>
            <div class="last_changes">
                <p class="last_changes1">Last changes were made on 13.01.2022</p>
            </div>
            <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
            <button onclick="topFunction()" id="go_to_top">^</button>
        </footer>
    </div>
    <script type="text/javascript" src="matrix.js"></script>
</body>
</html>