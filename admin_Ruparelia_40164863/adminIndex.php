<?php
    if(!isset($_SESSION))
        session_start();
    if(!(isset($_SESSION['tokenusername'])) || !(isset($_SESSION['tokenpassword'])))
        header("Location: ../Ruparelia_40164863/index.php");
    if($_SESSION['tokenusername']!="Bhavya" || $_SESSION['tokenpassword']!="123456")
        header("Location: ../Ruparelia_40164863/index.php");
    if(isset($_POST['buttonIndex'])) {
        $file = fopen('../indexPage.txt','w');
        fwrite($file, $_POST['professional_statement'] . "\n\n" . $_POST['brief_biography']);
        fclose($file);
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin Home Page!
        </title>
        <link rel="stylesheet" href="mystyleAdmin.css" />
    </head>
 
    <body class="admin-index">
        <div class="table-container">
            <table class="table">
                <thead class="thead">
                    <tr class="tr">
                        <th class="th"><a href="adminIndex.php">Home</a></th>
                        <td class="td"><a href="adminResume.php">Resume</a></td>
                        <td class="td"><a href="adminProjects.php">Projects</a></td>
                        <td class="td"><a href="adminContact.php">Contact</a></td>
                        <td class="td"><a href="adminSocial.php">Social</a></td>
                        <td class="td"><a href="logout.php">Logout</a></td>
                    </tr>
                </thead> 
            </table>
        </div>
        
        <p class="admin-index__para">
            <h1>Welcome
                <?php 
                    if(!isset($_SESSION))
                        session_start();
                    if(array_key_exists("tokenusername", $_SESSION))
                        echo $_SESSION["tokenusername"]; 
                ?>
            </h1>
            <form action="adminIndex.php" method="post">            
                <label for="professional_statement">Professional Statement:</label> 
                <br />
                <textarea id="professional_statement" name="professional_statement" rows="6" maxlength="600" cols="100" placeholder="Type text here"></textarea> 
        
                <br /><br />
        
                <label for="brief_biography">Brief Biography:</label> 
                <br />
                <textarea id="brief_biography" name="brief_biography" rows="6" maxlength="600" cols="100" placeholder="Type text here"></textarea>  
        
                 <br /><br />
        
                <input class="button" id="admin-index__button" name="buttonIndex" type="submit" value="Submit"/> 
            </form>
        </p>   
    </body>
</html>
