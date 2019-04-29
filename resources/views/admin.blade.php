@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row mb-5">
      <div class="col-9">
        <h1>All Institutes</h1>
      </div>
      <div class="col-3">
        <a href="{{ route('institute.create') }}" class="btn btn-lg btn-block btn-dark">Add an institute</a>
      </div>

    </div>
    <div class="row">
      <table class="table">
        <thead>
          <th>Name</th>
          <th>Type</th>
          <th>Board</th>
          <th>location</th>
          <th>Email</th>
          <th>Action</th>
        </thead>
        <tbody>
          @foreach ($admin->institutes as $institute )
            <tr>
              <td>{{ $institute->name }}</td>
              <td>{{ $institute->tuition_type }}</td>
              <td>{{ $institute->board_type }}</td>
              <td>{{ $institute->location }}</td>
              <td>{{ $institute->email }}</td>
              <td>
                <a href="{{ route('institute.show', $institute->id) }}" class="btn btn-info">View</a>
                <a href="{{ route('institute.edit', $institute->id) }}" class="btn btn-warning">Edit</a>
                <a href="{{ route('institute.destroy', $institute->id) }}" class="btn btn-danger">Delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection
