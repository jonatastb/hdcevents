@extends('layouts.main')

@section('title', 'Evento - ' . $event->title)

@section('content')

    <div>
        <div>
            <div>
                <img src="/img/events/{{$event->image}}" class="image-fluid" alt="{{$event->title}}">
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-city"><ion-icon name="location-outline"></ion-icon> {{$event->city}}</p>
            </div>
        </div>
    </div>

@endsection