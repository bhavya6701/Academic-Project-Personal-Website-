<?php
    if(!isset($_SESSION))
        session_start();
    if(isset($_POST["Enter"])) {
        $_SESSION["tokenusername"] = $_POST["Name"];
        $_SESSION["tokenpassword"] = $_POST["Password"];
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin Page!
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
                    <td><a href="social.php">Social</a></td>
                    <th><a href="admin.php">Admin</a></th>
                </tr>
            </thead>
        </table>
               
        <br />
        <br />
        <br />
        <br />

        <p class="admin">
            <img class="admin" src="welcome.jpg" height="200" alt="image"/>
        
            <br />
            <br />

            <form id="formAdmin" action="admin.php" method="post">
                Username:
                <input class="admin" name="Name" id="checkName" type="text" required="required" />
        
                <br />
                <br />

                Password:
                <input class="admin" name="Password" id="checkPassword" type="password" required="required"/>
        
                <br />
                <br />
                          
                <input class="admin2" name="Enter" id="Enter" type="submit" value="Enter"/>
            </form>
        </p>
        <script src="index.js"></script>
    </body>

</html>