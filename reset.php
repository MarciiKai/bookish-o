<?php
if(isset($_POST['submit'])){
    $email = $_POST ['email'];
    $newpassword = $_POST ['newpassword'];

    resetPassword($email, $password);
}

function resetPassword($email, $password){
    $user = $password;
    

    if ($user && password_verify($password, $user['password'])) {

        
        session_regenerate_id();

        
        $_SESSION['username'] = $user['username'];
        $_SESSION['user_id']  = $user['id'];


        return true;
    } 
    else{
    array_push($errors, "Wrong credentials");
    }
  
if (isset($_POST['reset-password'])) {
    $email = $_POST['$email'];
}
    
}
echo "You Have Successfully Reset your Password";
?>


