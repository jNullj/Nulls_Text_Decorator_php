<?php
require_once('decorator.php');
$dec = new Decorator;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Null's Text Decorator</title>
    </head>
    <body>
        <h1>Null's Text Decorator</h1>
        <br />
        <form action="index.php" method="post">
        <br />
        <?php
        if (isset($_POST["step2"]))
        {
                ?>
                Enter your text here → <input type="text" name="input" value="<?=$_POST["input"]; ?>" />
                <br />
                Circled text: <input type="text" name="cool1" value="<?=dec->cycle($_POST["input"]); ?>" />
                <?php
        }
        else
        {
                ?>
                Enter your text here → <input type="text" name="input" />
                <br />
                Circled text: <input type="text" name="cool1" />
                <?php
        }
        ?>
        <br />
        <input type="submit" name="step2" />
        </form>
    </body>
</html>
