<?php
if(isset($_POST['submit'])){
    $username = $_POST ['username'];
    $password = $_POST ['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
     $user = loginUser($email);
  
     if ($user && password_verify($password, $user['password'])) {

        
        session_regenerate_id();

        
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id']  = $user['id'];


        return true;
    }

    return false;
}


echo "Login Success!!!";

?>