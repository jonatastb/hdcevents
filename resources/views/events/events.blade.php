@extends('layouts.main')

@section('title', 'Eventos')

@section('style')
    <link rel="stylesheet" href="../css/eventsStyle.css">
@endsection

@section('content')
    <div class="events">
        <div class="int-div">
            <div class="container">
              @foreach ($events as $event)
                {{-- <div class="card mb-3" style="max-width: 540px;">
                  <div class="row g-0">
                    <div class="col-md-4 d-flex justify-center align-center">
                      <img src="/img/events/{{$event->image}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">{{$event->title}}</h5>
                        <p class="card-text">{{$event->description}}</p>
                        <p class="card-text"><small class="text-body-secondary">{{date_format($event->created_at, 'd/m/Y H:m')}}</small></p>
                      </div>
                    </div>
                  </div>
                </div> --}}
                <div class="card">
                  <img src="/img/events/{{$event->image}}" alt="Image 1">
              </div>
              @endforeach
            </div>
        </div>
    </div>

@endsection