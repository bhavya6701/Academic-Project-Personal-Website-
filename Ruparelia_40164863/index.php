<?php
    session_start();
    if(file_exists("../indexPage.txt")) {
        $file = fopen('../indexPage.txt', 'r');
        if(filesize('../indexPage.txt')>0)
            $_SESSION["array"]  = explode("\n\n", fread($file, filesize("../indexPage.txt")));
        fclose($file);
    } 
    else
        $_SESSION["array"] = null;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Home Page!
        </title>
        <link rel="stylesheet" href="mystyle.css">
    </head>
    <body>
        <table>
            <thead>
                <tr>
                    <th><a href="index.php">Home</a></th>
                    <td><a href="resume.php">Resume</a></td>
                    <td><a href="projects.php">Projects</a></td>
                    <td><a href="contact.php">Contact</a></td>
                    <td><a href="social.php">Social</a></td>
                    <td><a href="admin.php">Admin</a></td>
                </tr>
            </thead> 
        </table>

        <br /> 
        <br /> 
        <br />
        <br />
        
        <div>
            <img class="home" src="picture.jpg" width="300" height="350" alt="image"/>
        </div>

        <br />
        <hr class="home"/>
        <br />
        
        <div class="home1">
            <?php
                if(isset($_SESSION["array"]) && isset($_SESSION["array"][0]) && $_SESSION["array"][0]!=null && trim($_SESSION["array"][0], " ")!="")
                    echo trim($_SESSION["array"][0], " ");
                else
                    echo "I am Bhavya Manjibhai Ruparelia, currently pursuing Bachelor's degree in
                    Computer Science at Concordia University. I aim to be a full-stack developer
                    after completing my undergraduate degree. My far-sighted goal is to be an AI
                    researcher and to do some significant work in that field.";
            ?>
        </div>

        <br />
        <br />

        <div class="home2">
            <?php
                if(isset($_SESSION["array"]) && isset($_SESSION["array"][1]) && $_SESSION["array"][1]!=null && trim($_SESSION["array"][1], " ")!="")
                    echo trim($_SESSION["array"][1], " ");
                else
                    echo 'I have good knowledge of the object-oriented programming language - Java.
                    Being a self-starter, I like to learn new things continuously. I learned
                    Data Structure and Algorithms and participated in several competitive
                    programming contests to test my skills. I like to play chess, watch new
                    movies, play video games and take part in different coding contests.';
            ?>  
        </div>      
    </body>
</html>