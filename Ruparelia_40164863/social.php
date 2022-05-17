<?php
    session_start();
    if(file_exists("../socialPage.txt")) {
        $file = fopen('../socialPage.txt', 'r');
        if(filesize('../socialPage.txt')>0) 
            $_SESSION["array"]  = explode("\n\n", fread($file, filesize("../socialPage.txt")));
        fclose($file);
    }
    else
        $_SESSION["array"] = null;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Social Page!
        </title>
        <link rel="stylesheet" href="mystyle.css">
    </head>
    <body>        
        <table>
            <thead>
                <tr>
                    <td><a href="index.php">Home</a></td>
                    <td><a href="resume.php">Resume</a></td>
                    <td><a href="projects.php">Projects</a></td>
                    <td><a href="contact.php">Contact</a></td>
                    <th><a href="social.php">Social</a></th>
                    <td><a href="admin.php">Admin</a></td>
                </tr>
            </thead>
        </table>

        <br />
        <br />
        <br />
        <br />
        <br />
        <br />

        <h2 class="social">Connect with @bhavya_ruparelia!</h2>

       <br />

        <map name="icons" id="icons">
            <area shape="poly" coords="19,2,97,2,106,8,111,17,112,97,106,105,97,110,19,110,10,105,4,96,4,15,9,6"
            <?php
                if(isset($_SESSION["array"]) && isset($_SESSION["array"][0]) && $_SESSION["array"][0]!=null && trim($_SESSION["array"][0], " ")!="")
                    echo 'href=' . $_SESSION["array"][0];
                else
                    echo 'href="https://www.facebook.com/bhavya.ruparelia.7/"';
            ?>  alt="facebook"/>
            <area shape="poly" coords="270,111,278,105,283,96,283,14,277,7,
            269,2,190,2,181,7,175,15,174,96,179,105,187,111" 
            <?php
                if(isset($_SESSION["array"]) && isset($_SESSION["array"][1]) && $_SESSION["array"][1]!=null && trim($_SESSION["array"][1], " ")!="")
                    echo 'href=' . $_SESSION["array"][1];
                else
                    echo 'href="https://twitter.com/bhavyaruparelia"';
            ?>  alt="twitter"/>
            <area shape="poly" coords="97,170,106,175,112,184,113,264,108,273,99,278,19,278,10,273,4,264,4,186,9,177,17,171" 
            <?php
                if(isset($_SESSION["array"]) && isset($_SESSION["array"][2]) && $_SESSION["array"][2]!=null && trim($_SESSION["array"][2], " ")!="")
                    echo 'href=' . $_SESSION["array"][2];
                else
                    echo 'href="https://www.instagram.com/bhavya_ruparelia/"';
            ?> alt="instagram"/>
            <area shape="poly" coords="179,176,187,171,269,171,278,177,283,186,283,263,279,272,272,279,188,279,180,273,175,264,175,186" href="https://dribbble.com/" alt="dribbble"/>
            <area shape="poly" coords="354,170,433,170,442,175,447,184,447,265,442,274,433,279,354,278,344,274,339,265,339,185,345,176" href="https://www.linkedin.com/in/bhavya-ruparelia/" alt="linkedin"/>
            <area shape="poly" coords="7,344,15,339,95,338,104,344,109,351,110,433,104,441,96,446,15,447,7,441,1,433,2,352" href="https://www.whatsapp.com/" alt="whatsapp"/>
            <area shape="poly" coords="189,339,270,339,278,344,283,353,283,432,278,441,270,447,189,447,180,442,175,433,175,354,179,344" href="https://www.youtube.com/" alt="youtube"/>
            <area shape="poly" coords="359,339,441,339,450,344,455,353,455,433,449,441,440,446,362,446,353,442,348,433,346,353,351,344" href="https://www.snapchat.com/add/bhavya.6701" alt="snapchat"/>
        </map>

        <p class="social">
            <img title="social_media_icons" usemap="#icons" src="social_media_icons.jpg">       
        </p>
    </body>
</html>