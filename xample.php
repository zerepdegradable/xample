<!DOCTYPE html>
<html>
    <?php
        $count = 10;

        do {
            echo "$count seconds remaining<br>";
            $count--;
        } while ($count >= 0);
        
        echo "Time's up!";
    ?>
</html>

