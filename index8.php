<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index 8</title>
</head>
<body>
    <form method="post">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name">
        <br><br>
        <label for="number">Number: </label>
        <input type="number" id="number" name="number">
        <br><br>
        <label for="price">Price: </label>
        <input type="number" id="price" name="price">
        <br><br>
        <label for="discount">Discount: </label>
        <input type="number" id="discount" name="discount">
        <br><br>
        <input type="submit" value="Search">
        <br><br>
    </form>
</body>
</html>

<?php

    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $number = isset($_POST["number"]) ? $_POST["number"] : "";
    $price = isset($_POST["price"]) ? $_POST["price"] : "";
    $discount = isset($_POST["discount"]) ? $_POST["discount"] : "";
    if (!empty($name) && !empty($number) && !empty($price) && !empty($discount)) {
        echo "NEW ROOM: <br><br>";
        echo "<b>Name:</b> ". $name. "<br>";
        echo "<b>Number:</b> ". $number. "<br>";
        echo "<b>Price:</b> ". intval($price) * (1 - intval($discount)/100). " ($price, discount $discount%)<br>";
    }
    else{
        echo "Please, fill all fields.";
    }

?>