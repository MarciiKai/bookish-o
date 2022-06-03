<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
   $name = $username;
   $email = $email;
   $password = $password;

   $data = ['$name','$email','$password'];
   $file = "../storage/users.csv";
   $f = fopen($file,'w');

   if($f==true){

    foreach($data as $col){
        fputcsv($f, array($col));
    }

   }
}
echo "<script>alert('User successfully registered');
      window.location.href:(login.php);
      </script>";


?>


