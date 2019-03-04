   <?php
        if( isset($_COOKIE["name"]))
        {
            echo "<br>".var_dump($_COOKIE);
        }
        else
            echo "Sorry... Cookie data not available" . "<br />";
    ?>