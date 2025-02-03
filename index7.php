<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index 7</title>
</head>
<body>
    <form>
        <label for="num">ID:</label>
        <input type="text" id="num" name="num">
        <input type="submit">
    </form>
    <br><br>
</body>
</html>

<?php

    include_once("conection.php");

    $id = null;
    if (isset($_GET["num"]) && !empty($_GET["num"])){
        $id = intval($_GET["num"]);
    }

    if ($id != null){
        $query = "SELECT * FROM rooms WHERE id = $id";
        $res = $conn -> query($query);
        if ($res -> num_rows == 0) {
            echo "No room found with this ID.";
        }
        else{
            while ($row = $res -> fetch_assoc()) {
                $available = $row["avaiable"] ? "Yes" : "No";
                echo "<b>ID:</b> " . $row["id"] . "<br><b>Room Name:</b> " . $row["room_name"] . "<br><b>Bed Type:</b> " . $row["bed_type"] . "<br><b>Room Floor:</b> " . $row["room_floor"] . "<br><b>Facilities:</b> " . $row["facilities"] . "<br><b>Price:</b> " . $row["rate"] . "<br><b>Available:</b> " . $available . "<br><b>Image:</b> " . $row["image"];
            }
        }
    }
    else{
        echo "Please enter a valid ID.";
    }

?>