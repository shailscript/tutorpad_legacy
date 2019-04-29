@extends('layouts.app')
@section('content')
  <div class="container">
    @foreach ($institutes->chunk(3) as $items)
      <div class="row">
        @foreach ($items as $institute)
          <div class="col-md-4">
            <div class="card mb-5 box-shadow">
              <div class="card-header">
                Featured
              </div>
              <img class="card-img-top" src="{{ asset('images/' . $institute->image) }}" alt="{{$institute->image}}" height="400" width="400">
              <div class="card-body">
                <h5 class="card-title">{{$institute->name}}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{$institute->tuition_type}} {{$institute->board_type}}</h6>
                <p class="card-text">Accepts students from class {{$institute->class_from}} to class {{$institute->class_to}}</p>
                <a href="{{ route('institute.single', $institute->id) }}" class="btn btn-primary">View Details >></a>
              </div>
              <div class="card-footer text-muted text-center">
                <span>Location:  </span>{{$institute->location}}
              </div>
            </div>
          </div>
        @endforeach
      </div>
    @endforeach
  </div>
@endsection
