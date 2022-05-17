<?php
    if(!isset($_SESSION))
        session_start();
    if(!(isset($_SESSION['tokenusername'])) || !(isset($_SESSION['tokenpassword'])))
        header("Location: ../Ruparelia_40164863/index.php");
    if($_SESSION['tokenusername']!="Bhavya" || $_SESSION['tokenpassword']!="123456")
        header("Location: ../Ruparelia_40164863/index.php");
    if(isset($_POST["buttonIndex"])) {
        session_destroy();
        header("Location: ../Ruparelia_40164863/index.php");
    }
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>
            Logout Page!
        </title>
        <link rel="stylesheet" href="mystyleAdmin.css" />
    </head>
    <body class="admin-logout">       
        <div class="table-container">
            <table class="table">
                <thead class="thead">
                    <tr class="tr">
                        <td class="td"><a href="adminIndex.php">Home</a></td>
                        <td class="td"><a href="adminResume.php">Resume</a></td>
                        <td class="td"><a href="adminProjects.php">Projects</a></td>
                        <td class="td"><a href="adminContact.php">Contact</a></td>
                        <td class="td"><a href="adminSocial.php">Social</a></td>
                        <th class="th"><a href="logout.php">Logout</a></th>
                    </tr>
                </thead>
            </table>
        </div>    
               
        <p>
            <strong>SEE YOU SOON ADMIN! </strong>
            
            <br /><br />
            <form action="logout.php" method="post">
                <input class="button" id="admin-logout__button" name="buttonIndex" type="submit" value="Log Out"/>
            </form>
        </p>
        <script src="indexAdmin.js"></script>
    </body>
</html>