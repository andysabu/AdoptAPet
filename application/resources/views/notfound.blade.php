{{-- Set template --}}
@extends('layouts.app')
{{-- Set title --}}
@section('title','Adopt A Pet')
{{-- Set content --}}
@section('content')


<div class="card mb-3 mt-md-5 mb-md-5">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="{{ asset('/images/bg/puppy-cat-dog.jpg') }}"  class="card-img" alt="animal">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h1 class="card-title">{{ __('notfound.title') }}</h1>
        <h3>
          {{ __('notfound.reason') }}
        </h3>
        <p>
          {!! __('notfound.suggestion', ['home' => "<a href='../..'>Adopt a Pet</a>"]) !!}  
        </p>
      </div>
    </div>
  </div>
</div>

<h1>
  
</h1>


@endsection

@section('scripts')
@endsection
