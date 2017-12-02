<html>
    <head>

      <?php
        include_once('includes/init.php');
        if(!isset($_SESSION['user'])){
          header("location:index.php");
        }
      ?>
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

      <?= $_SESSION['message']; ?>
      <p>Aqui vai ser onde podes ver as tuas todo list e as todo list publicas, ainda nao esta implementado. Para já podes fazer o teu ver o teu perfil ou fazer logout</p>


      <div>
          <a href="profile.php?user=<?=$_SESSION['user'];?>"> <?= $_SESSION['user']; ?> </a>
          <a href="action_logout.php"> Logout </a>
      </div>

      <footer>

      </footer>
   </body>
</html>
