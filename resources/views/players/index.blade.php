<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>All players</title>
</head>
<body>
    <ul>
            @foreach($players as $player)
        <li>
                <a href="/players/{{$player->id}}">{{ $player -> first_name }} {{ $player ->last_name }}</a> 
                
        </li>
             @endforeach
    </ul>
    
</body>
</html>