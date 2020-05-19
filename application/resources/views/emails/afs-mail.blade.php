{{-- Set template --}}
@extends('layouts.mail')
{{-- Set title --}}
@section('title','Adopt A Pet')
{{-- Set content --}}
@section('content')

<div class="card text-center">
    <div class="card-header">
        <img src="{{ asset('/images/icons/logo.png') }}" alt="animal" width="48px" height="48px">
        {{-- <img src="{{ $message->embed(asset('images/icons/logo.png')) }}" alt="animal" width="48px" height="48px">
        --}}
    </div>
    <div class="card-body">
        <h5 class="card-title">
            {{ __('mail.new.request.title', ['action' => $action]) }}
        </h5>
        <p class="card-text">
            {{ __('mail.new.request.message', [
                    'name' => $user->name,
                    'lastname' => $user->person->last_name,
                    'action' => $action,
                    'animal' => $animal->name
                    ])
                }}
        </p>
    </div>
</div>


<div class="flex-container">
    <div class="card">
        <img src="{{ asset('/images/icons/logo.png') }}" alt="animal" style="width:100%">
        <h1>{{ $animal->name }}</h1>
        <div class="col-6 text-center">
            {{-- Set gender icon --}}
            @if (strcasecmp($animal->gender->value, 'male') == 0)
                <i class="fas fa-mars"></i>
            @elseif (strcasecmp($animal->gender->value, 'female') == 0)
                <i class="fas fa-venus"></i>
            @else
                <i class="fas fa-question"></i>
            @endif                        
        </div>
        <div class="col-6 text-center">
            {{-- Set animal type --}}
            @if (strcasecmp($animal->animal_type->name, 'dog') == 0)
                <i class="fas fa-dog"></i>
            @elseif (strcasecmp($animal->animal_type->name, 'cat') == 0)
                <i class="fas fa-cat"></i>
            @else
                <i class="fas fa-question"></i>
            @endif                        
        </div>
        <p>
            {{ $animal->description }}
        </p>

    </div>

    <div class="card">
        <img src="{{ asset('/images/icons/person-blue.png') }}" alt="person" style="width:100%">
        <h1>{{ $user->name }} {{ $user->person->last_name }}</h1>
        <address>
            <i class="fas fa-home"></i>
            {{ $user->person->address->street }} {{ $user->person->address->street_nbr }},
            {{ $user->person->address->house_nbr }}<br>
            {{ $user->person->address->postcode }} - {{ $user->person->address->city }}<br>
            {{ $user->person->address->country }}<br>
            Contact to <a href="mailto:{{ $user->email }}">{{ $user->email }}</a><br>
            <i class="fas fa-phone"></i>{{ $user->person->phone_number }}<br>
        </address>
    </div>
</div>



@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
@endsection