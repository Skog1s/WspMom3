<?php
   
    session_start();
    $_SESSION["inLoggad"] = false;
    if(isset($_POST['password'])){
        if($_POST['password']=='12345' && $_POST['username']=='admin'){
            $_SESSION['inLoggad'] = true;    
        
        }
    }  
    if($_SESSION["inLoggad"] === false) {
         header('Location: ../index.php');
       
    }
    else if ($_SESSION["inLoggad"] === true) {
        header('Location: home.php');
        
    }
?>
