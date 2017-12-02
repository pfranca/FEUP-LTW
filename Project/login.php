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
      <form action="action_login.php" method="post">
        <div class="container">
          <label><b>User Name</b></label>
          <input type="text" name="username" required>
          <br>

          <label><b>Password</b></label>
          <input type="password" name="password" required>
          <br>

          <div class="clearfix">
            <input type="submit" value="Log In!">
          </div>
        </div>
      </form>

      <footer>

      </footer>
   </body>
</html>
