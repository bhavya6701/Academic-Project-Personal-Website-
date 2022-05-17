<?php
    if(!isset($_SESSION))
        session_start();
    if(!(isset($_SESSION['tokenusername'])) || !(isset($_SESSION['tokenpassword'])))
        header("Location: ../Ruparelia_40164863/index.php");
    if($_SESSION['tokenusername']!="Bhavya" || $_SESSION['tokenpassword']!="123456")
        header("Location: ../Ruparelia_40164863/index.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin Contact Page!
        </title>
        <link rel="stylesheet" href="mystyleAdmin.css" />
    </head>
    <body class="admin-contact">       
        <div class="table-container">
            <table class="table">
                <thead class="thead">
                    <tr class="tr">
                        <td class="td"><a href="adminIndex.php">Home</a></td>
                        <td class="td"><a href="adminResume.php">Resume</a></td>
                        <td class="td"><a href="adminProjects.php">Projects</a></td>
                        <th class="th"><a href="adminContact.php">Contact</a></th>
                        <td class="td"><a href="adminSocial.php">Social</a></td>
                        <td class="td"><a href="logout.php">Logout</a></td>
                    </tr>
                </thead>
            </table>
        </div>   
        <p>
            My Contact Messages: 
            <input class="inputfile" id="admin-contact__inputfile" type="file"/>

            <br /><br />

            <div id="display_messages"></div>
        </p>

        <script src="indexAdmin.js"></script>
    </body>
</html>