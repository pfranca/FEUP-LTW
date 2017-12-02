<?php

  include_once('includes/init.php');

  $_SESSION['message']='';

  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo '1';

    if($_POST['password'] == $_POST['confirmpassword']){
      echo '2';
      $user = $_POST['username'];
      $name = $_POST['fullname'];
      $bday = $_POST['birthday'];
      $gender = $_POST['gender'];
      $password = md5($_POST['password']);
      $pic_path = 'images/profile/'.$_FILES['profilepic']['name'];

      //make sure type file is image
      if(preg_match("!image!",$_FILES['profilepic']['type'])){
        echo '3';

        //copy image to images/profile folder
        if(copy($_FILES['profilepic']['tmp_name'], $pic_path)){
          echo '4';

          $_SESSION['user'] = $user;
          $_SESSION['pic'] = $pic_path;
          echo '5';
          // Insert user
          $stmt = $dbh->prepare("INSERT INTO user VALUES (?,?,?,?,?,?,?)");
          $stmt->execute(array(NULL, $user, $name, $bday, $pic_path, $gender, $password));
          echo 'pintou';
          $_SESSION['message'] = "Registration succesfull! Added $user to the database!";
          header("location: home.php");

        } else{
            $_SESSION['message'] = "File upload failed!";
            header("location: signup.php");
        }
      } else{
        $_SESSION['message'] = "Please upload an image!";
        header("location: signup.php");
      }
    } else{
      echo 'yoyopo3';
      $_SESSION['message'] = "Tow passwords did not match!";
      header("location: signup.php");
    }
  }

?>
