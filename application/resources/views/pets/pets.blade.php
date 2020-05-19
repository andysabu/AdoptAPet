{{-- Set template --}}
@extends('layouts.app')
{{-- Set title --}}
@section('title','Adopt A Pet')
{{-- Set content --}}
@section('content')

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler btn-block" type="button" data-toggle="collapse" data-target="#navbarToggler"
        aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
        {{ __('pets.filter') }} <i class="fas fa-filter btn-lg"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarToggler">
        <form action="/pets" method="GET">
            @csrf
            <div class="form-row align-items-center">
                <div class="col-sm-2 my-1">
                    <input class="form-control mr-sm-2" type="search" id="filterName" name="petName"
                        placeholder="{{ __('pets.filter.name') }}">
                </div>
                <div class="col-sm-2 my-2">
                    <label class="mr-sm-2 sr-only" for="filterGender">{{ __('pets.filter.gender') }}</label>
                    <select class="custom-select mr-sm-2" id="filterGender" name="petGender">
                        <option hidden disabled selected value>{{ __('pets.filter.gender') }}</option>
                        @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}">{{ $gender->value }}</option>                            
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2 my-2">
                    <label class="mr-sm-2 sr-only" for="filterType">{{ __('pets.filter.type') }}</label>
                    <select class="custom-select mr-sm-2" id="filterType" name="petType">
                        <option hidden disabled selected value>{{ __('pets.filter.type') }}</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>                            
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2 my-2">
                    <label class="mr-sm-2 sr-only" for="filterBreed">{{ __('pets.filter.breed') }}</label>
                    <select class="custom-select mr-sm-2" id="filterBreed" name="petBreed">
                        <option hidden disabled selected value>{{ __('pets.filter.breed') }}</option>
                        @foreach ($breeds as $breed)
                            <option value="{{ $breed->id }}">{{ $breed->name }}</option>                            
                        @endforeach
                    </select>
                </div>
                <div class="col-sm-2 my-2">
                    <label class="mr-sm-2 sr-only" for="filterNbrPets">{{ __('pets.filter.pets.page') }}</label>
                    <select class="custom-select mr-sm-2" id="filterNbrPets" name="nbrPets">
                        <option hidden disabled selected value>{{ __('pets.filter.pets.page') }}</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                    </select>
                </div>
                @if (Auth::user() != null)
                    @foreach (Auth::user()->roles as $role)
                        {{-- Only let the Admin to filter by disabled animals --}}
                        @if (strcasecmp($role->name, 'admin') == 0)
                            <div class="col-sm-1 my-1 custom-control custom-switch" style="position: relative; left: 35px;">
                                <input type="checkbox" class="custom-control-input" id="isDisabled" name="petIsDisabled" data-animate="true">
                                <label class="custom-control-label label-disabled" for="isDisabled">{{ __('disabled')}}</label>
                            </div>
                            <div class="col-sm-1 my-1">
                                {{-- <button class="btn btn-outline-success my-2 my-sm-0 btn-block" id="filter"
                                    type="submit">{{ __('pets.filter') }}</button> --}}
                                <button class="btn btn-outline-success my-2 my-sm-0 btn-block" id="filter"
                                    type="submit"><i class="fas fa-filter"></i></button>
                            </div>
                            @break
                        @else
                            <div class="col-sm-2 my-1">
                                {{-- <button class="btn btn-outline-success my-2 my-sm-0 btn-block" id="filter"
                                    type="submit">{{ __('pets.filter') }}</button> --}}
                                <button class="btn btn-outline-success my-2 my-sm-0 btn-block" id="filter"
                                    type="submit"><i class="fas fa-filter"></i></button>
                            </div>
                        @endif
                    @endforeach
                @else
                    <div class="col-sm-2 my-1">
                        {{-- <button class="btn btn-outline-success my-2 my-sm-0 btn-block" id="filter"
                            type="submit">{{ __('pets.filter') }}</button> --}}
                        <button class="btn btn-outline-success my-2 my-sm-0 btn-block" id="filter"
                            type="submit"><i class="fas fa-filter"></i></button>
                    </div>
                @endif

            </div>
        </form>
    </div>
</nav>

<div class="row row-cols-1 row-cols-md-4 mx-4">

    @foreach ($pets as $pet)

    <div class="col mb-4">
        <div class="card h-100">
            <a href="{{ route('pet.show', ['id' => $pet->id]) }}" role="button">
                <img src="{{ asset('/images/icons/dog.png') }}" class="card-img-top" alt="{{ $pet->name }}">
            </a>
            <div class="card-body">
                <h5 class="card-title">{{ $pet->name }}</h5>
                {{-- <p class="card-text"><small class="text-muted">{{ $pet->gender->value }}</small></p> --}}
                {{-- <p class="card-text">{{ $pet->description }}</p> --}}
                <p class="card-text"><small class="text-muted">{{ $pet->arrival_date }}</small></p>
                <p class="card-text">
                    <a class="btn btn-secondary btn-block" href="{{ route('pet.show', ['id' => $pet->id]) }}"
                        role="button">{{ __('pets.see') }}</a>
                </p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="card-body d-flex justify-content-center">
    {{ $pets->appends($filter)->links() }}
    {{-- {{ $pets ->appends(['gender' => $breeds->petGender])->links() }} --}}
    
    {{-- {{ $pets ->appends(['gender' => $breeds->petGender, 'breed'=> $breeds->breed])->links() }} --}}

    {{-- <a href="pets" class="btn btn-dark mr-3"><i class="fas fa-paw paw-left"></i>···<i
            class="fas fa-paw paw-left"></i></a>
    <a href="pets" class="btn btn-dark ml-3"><i class="fas fa-paw paw-right"></i>···<i
            class="fas fa-paw paw-right"></i></a> --}}
</div>

@endsection

@section('scripts')
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
    <script src="{{ asset("js/pets.js") }}"></script>
@endsection