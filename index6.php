<?php

    include_once("conection.php");

    $message = "";
    $query = "SELECT * FROM rooms";
    $res = $conn -> query($query);

    $id = null;
    $idOnRooms = false;

    if($res -> num_rows == 0){
        echo "Error, no data provided.";
    }
    else{

        if (isset($_GET["id"])){

            if (is_numeric($_GET["id"]) && !empty($_GET["id"])){
    
                $id = intval($_GET["id"]);
                while($row = $res -> fetch_assoc()){
                    if ($row["id"] == $id){
                        $idOnRooms = true;
                    }
                }
    
                if (!$idOnRooms){
                    echo "Room not found.";
                }
                else{
                    $roomData = "SELECT * FROM rooms WHERE id = $id";
                    $findRoom = $conn -> query($roomData);
                    while($row = $findRoom -> fetch_assoc()){
                        $available = $row["avaiable"] ? "Yes" : "No";
                        echo "<b>ID:</b> " . $row["id"] . "<br><b>Room Name:</b> " . $row["room_name"] . "<br><b>Bed Type:</b> " . $row["bed_type"] . "<br><b>Room Floor:</b> " . $row["room_floor"] . "<br><b>Facilities:</b> " . $row["facilities"] . "<br><b>Price:</b> " . $row["rate"] . "<br><b>Available:</b> " . $available . "<br><b>Image:</b> " . $row["image"];
                    }
                }
    
            }
            else{
                echo "The ID must be a number.";
            }
    
        }
        else{
            echo "No ID parameter has been provided.";
        }

    }

?>