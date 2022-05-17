<?php
    session_start();
    if(file_exists("../projectsPage.txt")) {
        $file = fopen('../projectsPage.txt', 'r');
        if(filesize('../projectsPage.txt')>0)
            $_SESSION["array"]  = explode("\n\r", trim(fread($file, filesize("../projectsPage.txt")), " \n\r"));
        fclose($file);
    }
    else
        $_SESSION["array"] = null;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Projects Page!
        </title>
        <link rel="stylesheet" href="mystyle.css">
    </head>
    <body>        
        <table>
            <thead>
                <tr>
                    <td><a href="index.php">Home</a></td>
                    <td><a href="resume.php">Resume</a></td>
                    <th><a href="projects.php">Projects</a></th>
                    <td><a href="contact.php">Contact</a></td>
                    <td><a href="social.php">Social</a></td>
                    <td><a href="admin.php">Admin</a></td>
                </tr>
            </thead>
        </table>

        <br />
        <br />

        <p class="projects">
            My Projects!
        </p>
        
        <hr class="projects"/>
        <ol type="I" reversed>
        <?php
            if(isset($_SESSION["array"]) && isset($_SESSION["array"][0]) && $_SESSION["array"][0]!=null && trim($_SESSION["array"][0], " ")!="") {
                for($i=0;$i<count($_SESSION["array"]);$i++) {
                    if(trim($_SESSION["array"][$i], " ")!="")
                        echo '<li class="projects">' . trim($_SESSION["array"][$i], " ") . '</li>';
                }
            }
            else {
                echo '<li class="projects">
                          Academic Project - Designing software system to transmit data using hamming code (2021) <br/ >
                          The intent of this project was to create a program that converts user information into hamming code for 
                          error detection and correction on transmission. Learnt MARIE to convert user information to hamming 
                          code using parity bits for transmission and using the parity bits for error detection on reciever end.
                      </li>
                      <li class="projects">
                          Personal Project - Creating application "Zmusic" using Android Studio (2020)<br/ >
                          The intent of this project was to learn functionality of Android Studio and properties of an android
                          application. Zmusic is an application that fetches music files of user from the internal storage and
                          plays mp3 files with special functions and interactions/gestures.
                      </li>
                      <li class="projects">
                          Academic Project - Creating game "Casino Royale" using Java (2018) <br/ >
                          The intent of this project was to understand different properties of Java and implementation of object 
                          oriented programming. Built 2 multiplayer games - Blackjack and High-Low in Casino Royale Project. 
                          Learn different data structures and algorithms while creating the game.
                      </li>';
            }
        ?>
        </ol>
    </body>
</html>