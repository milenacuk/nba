@extends('layouts.master')

@section('title')
POcetna strana
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
