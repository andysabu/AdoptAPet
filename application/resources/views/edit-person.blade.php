@extends('layouts.app')
@section('title','Personal Area | Edit')
@section('content')

<div class="person-area-edit-header">
<h3>Welcome <strong>{{Auth::user()->name}}</strong></h3>
<h6 class="person-area-edit-h6"> You can update your details below</h6>
</div>

{{-- Displaying Errors --}}
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Form --}}
<form method="post" class="person-area-edit-form">
  @csrf
  @method('put')
  <div class="form-row">
    <div class="form-group col-md-6">
      <label>First Name</label>
      <input type="text" class="form-control" id="inputName" name="name" value="{{Auth::user()->name}}">
      </div>
      <div class="form-group col-md-6">
        <label>Email</label>
        <input type="text" class="form-control" id="inputEmail" name="email" readonly value="{{Auth::user()->email}}">
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>Last Name</label>
        <input type="text" class="form-control" id="inputLastName" name="last_name" value="@if ($user->person != null){{$user->person->last_name}}@endif">
      </div>
      <div class="form-group col-md-6">
        <label>Phone Number</label>
        <input type="text" class="form-control" id="inputPhoneNumber" name="phone_number" value="@if ($user->person != null){{$user->person->phone_number}}@endif">
      </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
          <label>Street</label>
          <input type="text" class="form-control" id="inputStreet" name="street" value="@if ($user->person != null){{$user->person->address->street}}@endif">
        </div>
        <div class="form-group col-md-3">
          <label>Street Nbr</label>
          <input type="text" class="form-control" id="inputStrNr" name="street_nbr" value="@if ($user->person != null){{$user->person->address->street_nbr}}@endif">
        </div>
        <div class="form-group col-md-3">
          <label>Flat/House Nbr</label>
          <input type="text" class="form-control" id="inputStrNr" name="house_nbr" value="@if ($user->person != null){{$user->person->address->house_nbr}}@endif">
        </div>
      </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label>City</label>
        <input type="text" class="form-control" id="inputCity" name="city" value="@if ($user->person != null){{$user->person->address->city}}@endif">
      </div>
      <div class="form-group col-md-3">
        <label>Postcode</label>
        <input type="text" class="form-control" id="inputZip" name="postcode" value="@if ($user->person != null){{$user->person->address->postcode}}@endif">
      </div>
      <div class="form-group col-md-3">
        <label>Country</label>
        <input type="text" class="form-control" id="inputZip" name="country" value="@if ($user->person != null){{$user->person->address->country}}@endif">
      </div>
    </div>
    <div class="person-area-edit-btn-div">
      <a href="{{ route('show.person', ['id' => $user->id]) }}">
        <input type="submit" class="btn btn-warning person-area-edit-btn" value="Update">
      </a>
    </div>
  </form>
  
  @endsection