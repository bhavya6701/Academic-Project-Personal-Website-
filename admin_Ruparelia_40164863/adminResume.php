<?php
    if(!isset($_SESSION))
        session_start();
    if(!(isset($_SESSION['tokenusername'])) || !(isset($_SESSION['tokenpassword'])))
        header("Location: ../Ruparelia_40164863/index.php");
    if($_SESSION['tokenusername']!="Bhavya" || $_SESSION['tokenpassword']!="123456")
        header("Location: ../Ruparelia_40164863/index.php"); 
    if(isset($_POST['buttonResume'])) {
        $file = fopen('../resumePage.txt','w');
        fwrite($file, $_POST['educational_qualifications'] . "\n\n" . $_POST['skill_set'] . "\n\n" . $_POST['awards_recognition'] . "\n\n" . $_POST['work_experience'] . "\n\n" . $_POST['referees']);
        fclose($file);
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            Admin Resume Page!
        </title>
        <link rel="stylesheet" href="mystyleAdmin.css" />
    </head>
    <body class="admin-resume">    
        <div class="table-container">
            <table class="table">
                <thead class="thead">
                    <tr class="tr">
                        <td class="td"><a href="adminIndex.php">Home</a></td>
                        <th class="th"><a href="adminResume.php">Resume</a></th>
                        <td class="td"><a href="adminProjects.php">Projects</a></td>
                        <td class="td"><a href="adminContact.php">Contact</a></td>
                        <td class="td"><a href="adminSocial.php">Social</a></td>
                        <td class="td"><a href="logout.php">Logout</a></td>
                    </tr>
                </thead>
            </table>
        </div>    
        
        <p class="admin-resume__para">
            <form action="adminResume.php" method="post">
                <label for="educational_qualifications">Educational Qualifications:</label> 
                <br />
                <textarea id="educational_qualifications" name="educational_qualifications" rows="6" maxlength="600" cols="100" placeholder="Type text here"></textarea>    
        
                <br /><br />

                <label for="skill_set">Skill Set:</label> 
                <br />
                <textarea id="skill_set" name="skill_set" rows="6" maxlength="600" cols="100" placeholder="Type text here"></textarea>    
        
                <br /><br />

                <label for="awards_recognition">Awards/Recognition:</label> 
                <br />
                <textarea id="awards_recognition" name="awards_recognition" rows="6" maxlength="600" cols="100" placeholder="Type text here"></textarea>    
        
                <br /><br />

                <label for="work_experience">Work Experience:</label> 
                <br />
                <textarea id="work_experience" name="work_experience" rows="6" maxlength="600" cols="100" placeholder="Type text here"></textarea>    
        
                <br /><br />
            
                <label for="referees">Referees:</label> 
                <br />
                <textarea id="referees" name="referees" rows="6" maxlength="600" cols="100" placeholder="Type text here"></textarea>    

                <br /><br />

                <input class="button" id="admin-resume__button" name="buttonResume" type="submit" value="Submit"/>
            </form>
        </p>
        
    </body>
</html>