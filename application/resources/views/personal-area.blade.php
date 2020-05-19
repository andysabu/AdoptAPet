@extends('layouts.app')
@section('title','Personal Area')
@section('content')

<div class="person-area-header">
  <h3>Welcome <strong>{{Auth::user()->name}}</strong></h3>
  <h6 class="person-area-h6">To update your personal details please click the button below</h6>
</div>

@csrf
<section class="person-area-container"><ul class="personal-area-list-group list-group-flush">
  <li class="list-group-item"><strong>First Name: </strong>{{Auth::user()->name}}</li>
  <li class="list-group-item"><strong>Last Name: </strong>
  @if ($user->person != null)
  {{$user->person->last_name}}
  @endif
</li>
<li class="list-group-item"><strong>Email: </strong>{{Auth::user()->email}}</li>
<li class="list-group-item"><strong>Phone Number: </strong>
  @if ($user->person != null)
    {{$user->person->phone_number}}
    @endif
  </li>
  <li class="list-group-item"><strong>Street: </strong>
    @if ($user->person != null)
    {{$user->person->address->street}}
    @endif
  </li>
</ul>
<ul class="personal-area-list-group list-group-flush">
  @if ($user->person != null)
      <li class="list-group-item"><strong>Street Number: </strong>{{$user->person->address->street_nbr}}</li>
      <li class="list-group-item"><strong>House/Flat Number: </strong>{{$user->person->address->house_nbr}}</li>
      <li class="list-group-item"><strong>City: </strong>{{$user->person->address->city}}</li>
      <li class="list-group-item"><strong>Postcode: </strong>{{$user->person->address->postcode}}</li>
      <li class="list-group-item"><strong>Country: </strong>{{$user->person->address->country}}</li>
      @else
      <li class="list-group-item"><strong>Street Number: </strong></li>
      <li class="list-group-item"><strong>House/Flat Number: </strong></li>
    <li class="list-group-item"><strong>City: </strong></li>
    <li class="list-group-item"><strong>Postcode: </strong></li>
    <li class="list-group-item"><strong>Country: </strong></li>      
    @endif
    
    
  </ul>
</section>
<div class="person-area-btn-div">
  <a href="{{ route('edit.person', ['id' => $user->id]) }}">
    <button type="button" class="btn btn-warning person-area-btn">Edit</button>
  </a>
</div>

  
  @endsection