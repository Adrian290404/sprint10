<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index 7</title>
</head>
<body>
    <form>
        <label for="roomName">Search: </label>
        <input type="text" id="roomName" name="roomName">
        <input type="submit" value="Search">
    </form>
    <br><br>
</body>
</html>

<?php

    include_once("conection.php");

    $text = null;
    $message = "";
    if (isset($_GET["roomName"]) && !empty($_GET["roomName"])){
        $text = ($_GET["roomName"]);
    }

    if ($text != null){
        $query = "SELECT * FROM rooms WHERE room_name LIKE '$text%'";
        $res = $conn -> query($query);
        if ($res -> num_rows == 0) {
            $message = "No room found.";
        }
        else{
            while ($row = $res -> fetch_assoc()) {
                $available = $row["avaiable"] ? "Yes" : "No";
                $message = $message . "<li><b>ID:</b> " . $row["id"] . "</li><li><b>Room Name:</b> " . $row["room_name"] . "</li><li><b>Bed Type:</b> " . $row["bed_type"] . "</li><li><b>Room Floor:</b> " . $row["room_floor"] . "</li><li><b>Facilities:</b> " . $row["facilities"] . "</li><li><b>Price:</b> " . $row["rate"] . "</li><li><b>Available:</b> " . $available . "</li><li><b>Image:</b> " . $row["image"] . "</li><br><br>";
            }
        }
    }
    else{
        $message = "Please enter any text on input.";
    }

    echo $message;

?>