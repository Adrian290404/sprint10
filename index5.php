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
        $message = $message . "<li><b>Room Name:</b> " . $row["room_name"] . "<br><b>Bed Type:</b> " . $row["bed_type"] . "<br><b>Room Floor:</b> " . $row["room_floor"] . "<br><b>Facilities:</b> " . $row["facilities"] . "<br><b>Price:</b> " . $row["rate"] . "<br><b>Available:</b> " . $available . "<br><b>Image:</b> " . $row["image"] . "</li><br><br>";
    }

?>

<ol>
    <?php echo $message;?>
</ol>