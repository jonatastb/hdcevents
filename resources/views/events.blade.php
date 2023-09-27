@extends('layouts.main')

@section('title', 'Welcome')

@section('content')

    <div>
        @foreach ($events as $event)
            <li>{{$event->title}} -- {{$event->description}}</li>
        @endforeach
    </div>

@endsection