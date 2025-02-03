<?php

    include_once("conection.php");

    $message = "";
    $query = "SELECT * FROM rooms";
    $res = $conn -> query($query);

    if($res -> num_rows == 0){
        echo "Error, no data provided.";
    }

    while($row = $res -> fetch_assoc()){
        $available = $row["avaiable"] ? "Yes" : "No";
        $message = $message . "<li>Room Name: " . $row["room_name"] . "<br>Bed Type: " . $row["bed_type"] . "<br>Room Floor: " . $row["room_floor"] . "<br>Facilities: " . $row["facilities"] . "<br>Price: " . $row["rate"] . "<br>Available: " . $available . "<br>Image: " . $row["image"] . "</li><br><br>";
    }

?>

<ol>
    <?php echo $message;?>
</ol>