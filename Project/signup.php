
<html>
    <head>
        <?php include_once('includes/init.php'); ?>
        <title>Done!</title>
        <meta charset="utf-8" />
        <link rel="shortcut icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700|Open+Sans:700|Raleway:700" rel="stylesheet">
    </head>
    <body>
      <header>
          <img src="images/checklogo.png" alt="checklist icon">
          <h1 id="titulo">Done!</h1>
          <h2 id="subt">Yesterday you said tomorrow. Just do it!</h2>
      </header>

      <p><?= $_SESSION['message']; ?> </p>
      <form action="action_signup.php" method="post" enctype="multipart/form-data">
        <div class="container">
          <label><b>User Name</b></label>
          <input type="text" name="username" required>
          <br>

          <label><b>Full Name</b></label>
          <input type="text" name="fullname">
          <br>

          <label><b>Birthday</b></label>
          <input type="date" name="birthday">
          <br>

          <label><b>Gender</b></label><br>
          <input type="radio" name="gender" value="male"> Male<br>
          <input type="radio" name="gender" value="female"> Female<br>
          <input type="radio" name="gender" value="other"> Other<br>
          <br>

          <label><b>Password</b></label>
          <input type="password" name="password" required>
          <br>

          <label><b>Confirm Password</b></label>
          <input type="password" name="confirmpassword" required>
          <br>

          <label><b>Upload your profile picture</b></label>
          <input type="file" name="profilepic" accept="image/*">
          <br>


          <div class="clearfix">
            <input type="reset">
            <input type="submit" value="Sign Up!">
          </div>
        </div>
      </form>

      <footer>

      </footer>
   </body>
</html>
