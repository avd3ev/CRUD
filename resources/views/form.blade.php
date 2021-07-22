@extends('layout')

@section('title',isset($user) ? 'Update' . $user->name : 'Create user')

@section('content')

<a type="button" class="btn btn-dark" href="{{route('users.index')}}" >Back</button></a>
<form method="POST" class="mt-3"
@if (isset($user)) 
action="{{route('users.update', $user)}}"

@else 
@endif
action="{{route('users.store')}}">
@csrf
@isset($user)
@method('PUT')
@endisset
<div class="row">
  <div class="col">
    <input name="name"
    value="{{isset($user) ? $user->name : null}}"
     type="text" class="form-control" placeholder="Name" aria-label="Name">
  </div>
  <div class="col">
    <input name="email" 
    value="{{isset($user) ? $user->email : null}}"
    type="text" class="form-control" placeholder="email" aria-label="email">
    
  </div>
</div>
<div class="row mt-3">
<div class="col">
<button type="submit" class="btn btn-secondary">Create</button>
</div>
</div>

</form>
@endsection