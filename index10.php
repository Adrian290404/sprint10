<?php

    require_once 'setup.php';

    // compact("rooms") = ["rooms" => $rooms]
    echo $blade->run("rooms", compact("rooms"));

?>
