<?php
    if(!isset($_SESSION))
        session_start();
    if(!(isset($_SESSION['tokenusername'])) || !(isset($_SESSION['tokenpassword'])))
        header("Location: ../Ruparelia_40164863/index.php");
    if($_SESSION['tokenusername']!="Bhavya" || $_SESSION['tokenpassword']!="123456")
        header("Location: ../Ruparelia_40164863/index.php"); 
    if(isset($_POST['buttonSocial'])) {
        $file = fopen('../socialPage.txt','w');
        fwrite($file, $_POST['social_textbox1'] . "\n\n" . $_POST['social_textbox2'] . "\n\n" . $_POST['social_textbox3']);
        fclose($file);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin Social Page!
        </title>
        <link rel="stylesheet" href="mystyleAdmin.css" />
    </head>
    <body class="admin-social">        
        <div class="table-container">
            <table class="table">
                <thead class="thead">
                    <tr class="tr">
                        <td class="td"><a href="adminIndex.php">Home</a></td>
                        <td class="td"><a href="adminResume.php">Resume</a></td>
                        <td class="td"><a href="adminProjects.php">Projects</a></td>
                        <td class="td"><a href="adminContact.php">Contact</a></td>
                        <th class="th"><a href="adminSocial.php">Social</a></th>
                        <td class="td"><a href="logout.php">Logout</a></td>
                    </tr>
                </thead>
            </table>
        </div>   
        
        <p class="admin-resume__para">
            <form action="adminSocial.php" method="post">
                <label for="admin-social_textbox1">Social Link 1: </label> 
                <input class="textbox" id="admin-social_textbox1" name="social_textbox1" type="text" placeholder="Link 1"/>   
        
                <br /><br />

                <label for="admin-social_textbox2">Social Link 2: </label> 
                <input class="textbox" id="admin-social_textbox2" name="social_textbox2" type="text" placeholder="Link 2"/>  

                <br /><br />
            
                <label for="admin-social_textbox3">Social Link 3: </label> 
                <input class="textbox" id="admin-social_textbox3" name="social_textbox3" type="text" placeholder="Link 3"/> 

                <br /><br />
                <input class="button" id="admin-social__button" name="buttonSocial" type="submit" value="Submit"/>
            </form>
        </p>
        
    </body>
</html>