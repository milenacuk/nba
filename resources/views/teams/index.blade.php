@extends('layouts.master')

@section('title')
    All teams
@endsection

@section('body')
    <ul>
            @foreach($teams as $team)
        <li>
                <a href="/teams/{{$team->id}}">{{ $team -> name }}</a> 
                
        </li>
             @endforeach
    </ul>
    
@endsection