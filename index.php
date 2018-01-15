<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Teszt</title>
        <?php 
        if(isset($_GET["dark"]) and !empty($_GET["dark"])) {
            if($_GET["dark"] == 1) {
                echo '<link rel="stylesheet" href="dark.css">';
                header('Refresh: 1; url=index.php?dark=0');
            } else {
                echo '<link rel="stylesheet" href="light.css">';
                header('Refresh: 1; url=index.php?dark=1');
            }
        } else {
            echo '<link rel="stylesheet" href="light.css">';
            header('Refresh: 1; url=index.php?dark=1');
        }
        ?>
    </head>
    <body>
        <a href="./index.php?dark=1">lőn sötéCSSég</a>
        <a href="./index.php?dark=0">lőn világosság</a>
    </body>
</html>