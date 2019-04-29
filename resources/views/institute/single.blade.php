@extends('layouts.app')
@section('content')
  <div class="container">
      <div class="row">
        <img class="col-5 mr-5" src="{{ asset('images/' . $institute->image) }}" alt="{{$institute->image}}" height="400" width="400">
        <div class="col-6">
          <h1>{{$institute->name}}</h1>
          <p>{{$institute->tuition_type}}</p>
          <p>{{$institute->board_type}}</p>
          <p class="">Accepts students from class {{$institute->class_from}} to class {{$institute->class_to}}</p>
          <p>{{$institute->phone}}</p>
          <p>{{$institute->mobile}}</p>
          <p>{{$institute->address}}</p>
          <p>{{$institute->description}}</p>
          <p>Location:  {{$institute->location}}</p>
        </div>
      </div>
      <br><br>
      <h3><span class="oi oi-comment-square"></span>{{ $institute->reviews()->count() }} Reviews</h3>
      @foreach ($institute->reviews as $review)
        <div class="row justify-content-between">
          <p class="col-8"><strong>{{ $review->name}}</strong> {{ $review->review }}</p>
          <p class="col-4"><a href="mailto:{{$review->email}}" class="badge badge-secondary">{{ $review->email}}</a></p>
        </div>
      @endforeach
      <div class="row">
          <div class="col-md-12">
            <form class="form" action="{{ route('review.store') }}" method="post">
              {{ csrf_field() }}
              <input type="number" hidden name="institute_id" value="{{ $institute->id }}">
              <div class="row">
                <div class="col-6 form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name">
                </div>
                <div class="col-6 form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" value="">
                </div>
                <div class="col-6 form-group">
                  <label for="education">Education</label>
                  <input type="number" name="education" value="">
                </div>
                <div class="col-6 form-group">
                  <label for="infrastructure">Infrastructure</label>
                  <input type="number" name="infrastructure" value="">
                </div>
                <div class="col-6 form-group">
                  <label for="faculties">Faculties</label>
                  <input type="number" name="faculties" value="">
                </div>
                <div class="row form-group">
                  <div class="col-12">
                    <label for="review">Write your review here :</label>
                    <input type="text" name="review">
                  </div>
                </div>
                <input class="btn btn-block" type="submit" name="submit" value="Post Review">
              </div>
            </form>
          </div>
        </div>
  </div>
@endsection
