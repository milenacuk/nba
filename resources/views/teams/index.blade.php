<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">   
    <title>All teams</title>
</head>
<body>
    <ul>
            @foreach($teams as $team)
        <li>
                <a href="/teams/{{$team->id}}">{{ $team -> name }}</a> 
                
        </li>
             @endforeach
    </ul>
    
</body>
</html>