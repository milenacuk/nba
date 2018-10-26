<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>Team</title>
</head>
<body>
    <p>Name: {{ $team -> name }}</p>
    <p>Email: {{ $team ->email }}</p>
    <p>Address: {{ $team -> address }}</p>
    <p>City: {{ $team -> city }}</p>
    <p><b>List players:</b> </p>
        <ul>
            @foreach($team->players as $player)   
            <li>
               <a href="/players/{{$player->id}}"><p>{{ $player->first_name }} {{ $player->last_name }}</p></a> 
            </li>               
     @endforeach
     </ul>
</body>
</html>