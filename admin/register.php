<?php

require_once '../connection.php';

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];
   $profile_image = $_FILES['profile_image']['name'];

   $select = " SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'user already exist!';

   }else{

      if($pass != $cpass){
         $error[] = 'password not matched!';
      }else{
         $insert = "INSERT INTO user_form(name, email, password, user_type, profile_image) VALUES('$name','$email','$pass','$user_type','$profile_image')";
         mysqli_query($conn, $insert);
         header('location:../index.php');
         echo 'you succesfully created a user';
      }
   }

};

if(isset($_FILES['profile_image'])){
   $file_name = $_FILES['profile_image']['name'];
   $file_tmp_name = $_FILES['profile_image']['tmp_name'];
   $file_size = $_FILES['profile_image']['size'];
   $file_error = $_FILES['profile_image']['error'];

   $allowed_file_extensions = array('jpg', 'jpeg', 'png');
   $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);

   if(in_array($file_extension, $allowed_file_extensions) === false){
      $error[] = 'File extension not allowed.';
   }

   if($file_error !== 0){
      $error[] = 'File upload error.';
   }

   if(empty($error) === true){
      move_uploaded_file($file_tmp_name, '../upload/' . $file_name);
   }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/form.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Register</h3>
      <?php
   if(isset($error)){
      foreach($error as $error){
         echo '<span class="error-msg">'.$error.'</span>';
       };
   };
   ?>
   <input type="text" name="name" required placeholder="enter your name">
   <input type="email" name="email" required placeholder="enter your email">
   <input type="password" name="password" required placeholder="enter your password">
   <input type="password" name="cpassword" required placeholder="confirm your password">
   <input type="file" name="profile_image">
   <input type="submit" name="submit" value="register now" class="form-btn">
   <p>if you already have an account <a href="login.php">Login</a></p>
</form></div>