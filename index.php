<?php
require_once('decorator.php');
$dec = new Decorator;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Null's Text Decorator</title>
    </head>
    <body>
        <div id="header">
            <h1>Null's Text Decorator</h1>
        </div>
        <br />
        <br />
        <div id="main">
            <form action="index.php" method="post">
                <table>
                    <?php
                    if (isset($_POST["step2"]))
                    {
                            ?>
                    <tr><th>
                            Enter your text here → </th><th><input type="text" name="input" value="<?=$_POST["input"]; ?>" /></th>
                    </tr><tr><th>
                            Circled text: </th><th><input type="text" name="cool1" value="<?=$dec->cycle($_POST["input"]); ?>" readonly /></th>
                    </tr><tr><th>
                            Leet text: </th><th><input type="text" name="cool1" value="<?=$dec->leet($_POST["input"]); ?>" readonly /></th>
                    </tr>
                            <?php
                    }
                    else
                    {
                            ?>
                    <tr><th>
                            Enter your text here → </th><th><input type="text" name="input" /></th></tr>
                            <?php
                    }
                    ?>
                    <tr><th colspan="2" class="submit"><input class="submitButton" type="submit" name="step2" value="Decorate" /></th></tr>
                </table>
            </form>
        </div>
    </body>
</html>
