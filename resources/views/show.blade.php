@extends('layout')

@section('title', 'Users'. $user->name)

@section('content')
<a type="button" class="btn btn-dark mt-3" href="{{route('users.index')}}" >Back</button></a>
<div class="card mt-3"  style="width: 18rem;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Id: {{$user->id}}</li>
    <li class="list-group-item">Name: {{$user->name}}</li>
    <li class="list-group-item">Email: {{$user->email}}</li>
    <li class="list-group-item">Created_at: {{$user->created_at->format("M,d,Y h:i")}}</li>
    <li class="list-group-item">Updated_at: {{$user->updated_at->format("M,d,Y h:i")}}</li>
  </ul>
</div>
<a href="{{route('users.edit', $user)}}"><button type="button" class="btn btn-warning mt-3">Edit</button></a>
<form method="POST" class="mt-3" action="{{route('users.destroy', $user)}}">
      <button type="submit" class="btn btn-danger">Delete</button></a>
      @csrf
     @method('DELETE')
      </form>
@endsection