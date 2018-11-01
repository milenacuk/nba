@extends('layouts.master')
    
@section('title')
    Player
@endsection

@section('body')
    <p>Name: {{ $player -> first_name }}</p>
    <p>Last name: {{ $player -> last_name }}</p>
    <p>Email: {{ $player -> email }}</p>
    <p>Team: {{ $player->team -> name }}</p>
    
@endsection