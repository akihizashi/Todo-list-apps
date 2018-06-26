@extends('layout')

@include('layouts.nav')

@section('content')
  <h2 class="text-center py-5">Create new task</h2>

  <form method="POST" action="/tasks">
    {{ csrf_field() }}

    <div class="container w-50">
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="" name="body" placeholder="Enter your new task">
      </div>
      <button type="submit" class="btn btn-success">Save task</button>
      <a class="float-right my-4 small" href="/tasks">Back to list<i class="fas fa-sign-out-alt mx-1"></i></a>
    @include('layouts.create_error')
    </div>
  </form>
@endsection
