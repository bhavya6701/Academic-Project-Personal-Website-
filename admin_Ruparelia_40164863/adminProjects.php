<?php
    if(!isset($_SESSION))
        session_start();
    if(!(isset($_SESSION['tokenusername'])) || !(isset($_SESSION['tokenpassword'])))
        header("Location: ../Ruparelia_40164863/index.php");
    if($_SESSION['tokenusername']!="Bhavya" || $_SESSION['tokenpassword']!="123456")
        header("Location: ../Ruparelia_40164863/index.php");
    if(isset($_POST['buttonProjects'])) {
        $file = fopen('../projectsPage.txt','w');
        fwrite($file, $_POST['projects']);
        fclose($file);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin Projects Page!
        </title>
        <link rel="stylesheet" href="mystyleAdmin.css" />
    </head>
    <body class="admin-projects">        
        <div class="table-container">
            <table class="table">
                <thead class="thead">
                    <tr class="tr">
                        <td class="td"><a href="adminIndex.php">Home</a></td>
                        <td class="td"><a href="adminResume.php">Resume</a></td>
                        <th class="th"><a href="adminProjects.php">Projects</a></th>
                        <td class="td"><a href="adminContact.php">Contact</a></td>
                        <td class="td"><a href="adminSocial.php">Social</a></td>
                        <td class="td"><a href="logout.php">Logout</a></td>
                    </tr>
                </thead>
            </table>
        </div>   
        
        <p class="admin-projects__para">
            <form action="adminProjects.php" method="post">
                <label for="my_projects">My Projects:</label> 
                <br />
                <textarea id="my_projects" name="projects" rows="6" maxlength="600" cols="100" placeholder="Type text here"></textarea>   

                <br /><br />

                <input class="button" id="admin-projects__button" name="buttonProjects" type="submit" value="Submit"/>
            </form>
        </p>
        
    </body>
</html>