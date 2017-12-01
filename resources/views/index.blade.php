@extends('layouts.welcome')

@section('content')
        <a href="{{route('todos')}}">
                <h2>View Todos</h2>
        </a>
@endsection