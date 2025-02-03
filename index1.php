<?php

    $rooms = [
        [
            "ID" => 1,
            "Name" => "Luxury Suite B-101",
            "Number" => "+34 920 34 41 87",
            "Price" => 250,
            "Discount" => 10
        ],
        [
            "ID" => 2,
            "Name" => "Family Room C-201",
            "Number" => "+34 920 34 41 88",
            "Price" => 180,
            "Discount" => 20
        ],
        [
            "ID" => 3,
            "Name" => "Standard Room D-305",
            "Number" => "+34 920 34 41 89",
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