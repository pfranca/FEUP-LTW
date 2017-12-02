<html>
    <head>

      <?php
        include_once('includes/init.php');

        $stmt = $dbh->prepare('SELECT * FROM user WHERE user_username = ? ');
        $stmt->execute(array($_GET[user]));
        $result = $stmt->fetch();
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

    <img src="<?=$result[user_photoId]?>" >
    <p>User name: <?=$result[user_username]?></p>
    <p>Name: <?=$result[user_fullName]?></p>
    <p>Birthday: <?=$result[user_birthDate]?></p>
    <p>Gender: <?=$result[user_gender]?></p>
      <footer>

      </footer>
   </body>
</html>
