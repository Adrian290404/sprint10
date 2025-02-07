<?php

    require_once 'BladeOne.php';
    use eftec\bladeone\BladeOne;

    $views = __DIR__ . '/views';
    $cache = __DIR__ . '/cache';

    $blade = new BladeOne($views, $cache, BladeOne::MODE_AUTO);

    include_once("conectionHotel.php");

    $query = "SELECT * FROM rooms";
    $stmt = $conn->prepare($query);
    $stmt->execute();
    $result = $stmt->get_result();

    $rooms = [];

    while ($row = $result->fetch_assoc()) {
        $row["avaiable"] = $row["avaiable"] ? "Yes" : "No";
        $rooms[] = $row;
    }

    $stmt->close();
    $conn->close();
    
?>