<?php

function logout(){
   
if (is_user_logged_in()) {
    
        unset($_SESSION['username'], $_SESSION['user_id']);
        session_destroy();
        redirect_to('login.php');
       }


    }

echo "You are logged out!!";
?>
