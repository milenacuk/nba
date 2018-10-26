<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>Player</title>
</head>
<body>
    <p>Name: {{ $player -> first_name }}</p>
    <p>Last name: {{ $player -> last_name }}</p>
    <p>Email: {{ $player -> email }}</p>
    <p>Team: {{ $player->team -> name }}</p>
    
</body>
</html>