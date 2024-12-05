<!DOCTYPE html>
<html>
    <style>
        body{
            font-family: 'Courier New', Courier, monospace;
            margin-top: 100px;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
    <center>
    <body>
    <?php
        $count = 10;

        do {
            echo "$count seconds remaining<br>";
            $count--;
        } while ($count >= 0);
        
        echo "Time's up!";
    ?>
    </body>
    </center>
</html>

