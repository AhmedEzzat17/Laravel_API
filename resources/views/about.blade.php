@extends('layout.master')

@section('title', 'About')

@section('content')
{{-- <h1>{{ $id }}</h1> --}}
<h1>About</h1>
<div
    style="background: darkred; padding: 10px; margin: 10px; border-radius: 10px;display: flex;flex-direction: row;align-items: center;justify-content: space-evenly;">
    @foreach($students as $student)
        <h1 style="color: white;">{{ $student }}</h1>
    @endforeach
</div>
@stop