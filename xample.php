<!DOCTYPE html>
<html>
    <title>Counter Timer</title>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
            margin-top: 100px;
            font-size: 30px;
            font-weight: bold;
        }
        h1{
            font-weight: bold;
            font-size: 40px;
            font-family: 'Courier New', Courier, monospace;
        }
    </style>

    <center>
    <h1>Counter Timer</h1>
    <title>Counter Timer</title>
    <body>
    <?php
        $count = 10;

        do {
            echo "$count seconds remaining<br>";
            $count--;
        } while ($count >= 0);
        
        echo "<br>Time's up!";
    ?>
    </body>
    </center>
</html>

