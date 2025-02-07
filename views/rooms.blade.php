<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>
</head>
<body>

    <h1>Available Rooms</h1>

    <ol>
        @foreach ($rooms as $room)
            <li>
                <h2>{{ $room['room_name'] }}</h2>
                <img src="{{ $room['image'] }}" alt="{{ $room['room_name'] }}" style="width:200px; height:auto;">
                <p><strong>Bed Type:</strong> {{ $room['bed_type'] }}</p>
                <p><strong>Room Floor:</strong> {{ $room['room_floor'] }}</p>
                <p><strong>Facilities:</strong> {{ $room['facilities'] }}</p>
                <p><strong>Price:</strong> ${{ $room['rate'] }} per night</p>
                <p><strong>Available:</strong> {{ $room['avaiable'] }}</p>
            </li>
        @endforeach
    </ol>

</body>
</html>