{{-- Set template --}}
@extends('layouts.app')
{{-- Set title --}}
@section('title','Adopt A Pet')
{{-- Set content --}}
@section('content')

<div class="person-area-header">
    <h3>{{ __('pets.great') }} <strong>{{Auth::user()->name}}!!</strong></h3>
    <h6 class="person-area-h6">{{ __('pets.afs.thanks', ['action' => $action, 'petName' => $pet->name]) }}</h6>
</div>

<div class="container">
    <div class="row justify-content-center">
        {{-- Pet --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <img src="{{ asset('/images/icons/logo.png') }}" alt="animal" width="48px" height="48px">
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">{{ __('pets.name') }}</label>
                            <input type="text" class="form-control" id="firstName" disabled value="{{ $pet->name }}">
                        </div>
                    </div>
                    <div class="form-row justify-content-center">
                        <div class="col-6 text-center">
                            {{-- Set gender icon --}}
                            @if (strcasecmp($pet->gender->value, 'male') == 0)
                                <i class="fas fa-mars"></i>
                            @elseif (strcasecmp($pet->gender->value, 'female') == 0)
                                <i class="fas fa-venus"></i>
                            @else
                                <i class="fas fa-question"></i>
                            @endif                        
                        </div>
                        <div class="col-6 text-center">
                            {{-- Set animal type --}}
                            @if (strcasecmp($pet->animal_type->name, 'dog') == 0)
                                <i class="fas fa-dog"></i>
                            @elseif (strcasecmp($pet->animal_type->name, 'cat') == 0)
                                <i class="fas fa-cat"></i>
                            @else
                                <i class="fas fa-question"></i>
                            @endif                        
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-12 mb-3">
                            <label for="breed">{{ __('pets.filter.breed') }}</label>
                            <input type="text" class="form-control" id="breed" disabled value="{{ $pet->breed->name }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Person --}}
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <img src="/../images/icons/person-blue.png" alt="person" width="48px" height="48px">
                </div>

                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="firstName">First name</label>
                            <input type="text" class="form-control" id="firstName" disabled
                                value="{{ Auth::user()->name }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="lastname">Last name</label>
                            <input type="text" class="form-control" id="lastname" disabled
                                value="{{ Auth::user()->person->last_name }}">
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="email">Email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="emailSymbol">@</span>
                                </div>
                                <input type="text" class="form-control" id="email" aria-describedby="emailSymbol"
                                    disabled value="{{ Auth::user()->email }}">
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-6 mb-3">
                            <label for="street">Street</label>
                            <input type="text" class="form-control" id="street" disabled
                                value="{{ Auth::user()->person->address->street }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="streetNbr">Street nbr</label>
                            <input type="text" class="form-control" id="streetNbr" disabled
                                value="{{ Auth::user()->person->address->street_nbr }}">
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="houseNbr">House nbr</label>
                            <input type="text" class="form-control" id="houseNbr" disabled
                                value="{{ Auth::user()->person->address->house_nbr }}">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-4">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" disabled
                                value="{{ Auth::user()->person->address->city }}">
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="postcode">Postcode</label>
                            <input type="text" class="form-control" id="postcode" disabled
                                value="{{ Auth::user()->person->address->postcode }}">
                        </div>
                        <div class="col-md-4 mb-4">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" disabled
                                value="{{ Auth::user()->person->address->country }}">
                        </div>
                    </div>

                        
                    <form action="/pet/afs/{{ $action }}/{{ $pet->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="adadad" id="invalidCheck2" required>
                                <label class="form-check-label" for="invalidCheck2">
                                    <a href="#" data-toggle="modal" data-target="#confirmDialog">
                                        {{ __('pets.agree') }}
                                    </a>
                                </label>
                            </div>
                        </div>
                        <div class="card-body d-flex justify-content-center">
                            <input type="submit" class="btn btn-primary" name="submit" value="{{ __('pets.request') }}">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmDialog" tabindex="-1" role="dialog" aria-labelledby="confirmDialog"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">{{ __('pets.agree.title') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('layouts.terms-conditions')
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('pets.close') }}</button>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
@endsection