<?php
    $db = mysqli_connect ("localhost","tester","12345","mysql");
    if(!$db)
    {
        echo "����� ������ error: " . mysqli_connect_error() . PHP_EOL;
    }

?>