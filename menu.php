<html>
    <head>
        <title>
            Transulate Page Language
        </title>
    </head>
    <body>
        <ul>
            <li><a href="index.php">Home</a></li>
             <li><a href="another.php">Menu</a></li>
        </ul>
        <ul>
             <li><a href="?lang=english">English</a></li>
              <li><a href="?lang=german">Deutsch</a></li>
        </ul>
       <?php echo $lang['Hello'] ?>
    </body>
</html>