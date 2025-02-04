<?php

    $rooms = [
        [
            "ID" => 1,
            "Name" => "Luxury Suite B-101",
            "Number" => 6,
            "Price" => 250,
            "Discount" => 10
        ],
        [
            "ID" => 2,
            "Name" => "Family Room C-201",
            "Number" => 3,
            "Price" => 180,
            "Discount" => 20
        ],
        [
            "ID" => 3,
            "Name" => "Standard Room D-305",
            "Number" => 4,
            "Price" => 90,
            "Discount" => 30
        ]
    ];

    $id = null;
    $idOnRooms = false;

    if (isset($_GET["id"])){

        if (is_numeric($_GET["id"]) && !empty($_GET["id"])){

            $id = intval($_GET["id"]);
            foreach ($rooms as $room){

                if ($room["ID"] == $id){
                    echo "<b>Name:</b> ". $room["Name"]. "<br>";
                    echo "<b>Number:</b> ". $room["Number"]. "<br>";
                    echo "<b>Price:</b> ". intval($room["Price"]) * (1 - intval($room["Discount"])/100). "<br>";
                    $idOnRooms = true;
                }

            }

            if (!$idOnRooms){
                echo "Room not found.";
            }

        }

        else{
            echo "The ID must be a number.";
        }

    }
    
    else{
        echo "No ID parameter has been provided.";
    }

?>