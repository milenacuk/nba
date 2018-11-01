@extends('layouts.master')
    
@section('title')
    Players
@endsection

@section('body')
    <ul>
            @foreach($players as $player)
        <li>
                <a href="/players/{{$player->id}}">{{ $player -> first_name }} {{ $player ->last_name }}</a> 
                
        </li>
             @endforeach
    </ul>
    
@endsection