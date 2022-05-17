<?php
    session_start();
    if(file_exists("../resumePage.txt")) {
        $file = fopen('../resumePage.txt', 'r');
        if(filesize('../resumePage.txt')>0)
            $_SESSION["array"]  = explode("\n\n", fread($file, filesize("../resumePage.txt")));
        fclose($file);
    }
    else
        $_SESSION["array"] = null;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Resume Page!
        </title>
        <link rel="stylesheet" href="mystyle.css">
    </head>
    <body>        
        <table>
            <thead>
                <tr>
                    <td><a href="index.php">Home</a></td>
                    <th><a href="resume.php">Resume</a></th>
                    <td><a href="projects.php">Projects</a></td>
                    <td><a href="contact.php">Contact</a></td>
                    <td><a href="social.php">Social</a></td>
                    <td><a href="admin.php">Admin</a></td>
                </tr>
            </thead>
        </table>

        <br />
        <br />

        <dl>
            <dt>
                <u>Education & Qualifications</u>:
            </dt>
            <?php
                if(isset($_SESSION["array"]) && isset($_SESSION["array"][0]) && $_SESSION["array"][0]!=null && trim($_SESSION["array"][0], " ")!="") {
                    $arr = explode("\n", $_SESSION["array"][0]);
                    for($i=0;$i<count($arr);$i++) {
                        if($arr[$i]!="\r")
                            echo "<dd>" . $arr[$i] . "</dd>";
                    }
                }
                else {
                    echo '<dd> Completed Secondary school with a score of 94.5%. </dd>
                          <dd> Continuing education at Concordia University for Bachelor of Computer Science Co-op program. </dd>';
                }
            ?>
        </dl>

        <dl>
            <dt>
                <u>Professional & Technical Skills</u>:
            </dt>
            <?php
                if(isset($_SESSION["array"]) && isset($_SESSION["array"][1]) && $_SESSION["array"][1]!=null && trim($_SESSION["array"][1], " ")!="") {
                    $arr = explode("\n", $_SESSION["array"][1]);
                    for($i=0;$i<count($arr);$i++) {
                        if($arr[$i]!="\r")
                            echo "<dd>" . $arr[$i] . "</dd>";
                    }
                }
                else {
                    echo '<dd> HTML | XML | CSS </dd>
                          <dd> Java | Python </dd>
                          <dd> Eclipse | Pycharm | Visual Studio Code | Android Studio </dd>';
                }
            ?>
            
        </dl>

        <br />

        <span class="resume1"><u>Achievements</u>:</span>
        
        <ol>
            <?php
                if(isset($_SESSION["array"]) && isset($_SESSION["array"][2]) && $_SESSION["array"][2]!=null && trim($_SESSION["array"][2], " ")!="") {
                    $arr = explode("\n", $_SESSION["array"][2]);
                    for($i=0;$i<count($arr);$i++) {
                        if($arr[$i]!="\r")  
                            echo '<li class="resume">' . $arr[$i] . '</li>';
                    }
                }
                else {
                    echo '<li class="resume"> Reached top 150 in Zonal Computing Olympiad in India. </li>
                          <li class="resume"> Reached State-level in Judo Competition in year 2019. </li>';
                }
            ?>
            
        </ol>

        <br />

        <span class="resume1"><u>Work Experience</u>:</span>
        <ol>
            <?php
                if(isset($_SESSION["array"]) && isset($_SESSION["array"][3]) && $_SESSION["array"][3]!=null && trim($_SESSION["array"][3], " ")!="") {
                    $arr = explode("\n", $_SESSION["array"][3]);
                    for($i=0;$i<count($arr);$i++) {
                        if($arr[$i]!="\r")
                            echo '<li class="resume">' . $arr[$i] . '</li>';
                    }
                }
                else {
                    echo '<li class="resume">
                            <span class="resume2">Intern at WeTheDevelopers (September 2020 - December 2020)</span>
                            <ul>
                                <li class="resume">
                                    Acquired basic knowledge of Android studio and XML along with Java to create a demo application.
                                </li>
                                <li class="resume">
                                    Learnt important lessons and appropriate skills from my seniors on how to create every mobile application successfully.
                                </li>
                            </ul>
                        </li>
                        <li class="resume">
                            <span class="resume2">Life Insurance Agent at Life Insurance Corporation of India (January 2020 - August 2020)</span>
                            <ul>
                                <li class="resume">
                                    Worked at Life Insurance of India and established relations with different clients in first few months.
                                </li>
                                <li class="resume">
                                    Took several life insurances and developed relation building and communication skills.
                                </li>
                            </ul>
                        </li>';
                }
            ?>
        </ol>

        <br />

        <span class="resume1"><u>References</u>:</span>
        <ol>
            <?php
                if(isset($_SESSION["array"]) && isset($_SESSION["array"][4]) && $_SESSION["array"][4]!=null && trim($_SESSION["array"][4], " ")!="") {
                    $arr = explode("\n", $_SESSION["array"][4]);
                    for($i=0;$i<count($arr);$i++) {
                        if($arr[$i]!="")
                            echo '<li class="resume">' . $arr[$i] . '</li>';
                    }
                }
                else {
                    echo '<li class="resume"> Dr. Vimal Bhuva </li>
                          <li class="resume"> Dr. Mayank Agarwal </li>
                          <li class="resume"> Ms. Nishant Khimani </li>
                          <li class="resume"> Ms. Priti Dave </li>';
                }
            ?>
        </ol>

        <br />
        
        <span class="resume3">Download Full CV:</span>
        <a href="Bhavya_Ruparelia_Resume.pdf"><button name="CV" id="CV">Download</button></a>
    </body>
</html>