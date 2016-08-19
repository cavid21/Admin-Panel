<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
    </head>
    <body>
        <?php
            session_start();
            if($_SESSION['admin'] == true){
                echo "admin paneldi bura";
            }
            else{
                echo "admin falsedi";
                header('Location:index.php');
            }
        ?>
          
        <button name="button"><a href="logout.php">Log out</a></button>
        
    </body>		





