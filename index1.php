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

?>

<pre>
    <?php
        print_r($rooms);
    ?>
</pre>