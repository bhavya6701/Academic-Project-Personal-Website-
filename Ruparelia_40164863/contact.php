<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Contact Page!
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
                    <th><a href="contact.php">Contact</a></th>
                    <td><a href="social.php">Social</a></td>
                    <td><a href="admin.php">Admin</a></td>
                </tr>
            </thead>
        </table>

        <br />
        <br />
            
        <p class="contact">
            Contact Me!
        </p>
        
        <hr class="contact"/>

        <p class="contact2">
            <form id="formContact">
                Name
                <br />
                <input name="Name" id="Name" type="text" required="required" placeholder="Enter your name"/>
                <br /> <br />

                Email
                <br />
                <input name="Email" id="Email" type="email" required="required" placeholder="Enter your email id"/>
                <br /> <br />
        
                Phone Number
                <br />
                <input name="Number" id="Number" type="tel" maxlength="10" required="required" placeholder="Enter your phone number"/>
                <br /> <br />

                Write here:
                <br />
                <textarea id="abcd" cols="40" rows="10" placeholder="Write details here"></textarea>
            
                <br /> <br />
                <button name="submit" id="btnContact">
                    Submit
                </button>
            </form>
        </p>
        <script src="index.js"></script>
    </body>
</html>