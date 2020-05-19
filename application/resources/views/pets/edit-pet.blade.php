{{-- Set template --}}
@extends('layouts.app')
{{-- Set title --}}
@section('title','Adopt A Pet')
{{-- Set content --}}
@section('content')

<div class="row justify-content-center my-2">
    <div class="col-sm-6">
        <div class="card">
            <div id="carouselPet" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('/images/icons/dog.png') }}" class="card-img-top" alt="{{ $pet->name }}">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('/images/icons/cat.png') }}" class="card-img-top" alt="{{ $pet->name }}">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselPet" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselPet" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <form method="post">
                @csrf
                @method('PUT')
                {{-- Pet's animal --}}
                <div class="form-group card-body">
                    <label for="inputCity">{{ __('pets.name') }}</label>
                    <input type="text" class="form-control" id="animalName" name="name" value="{{ $pet->name }}">
                </div>
                {{-- Breed --}}
                <div class="card-body">
                    <label for="breedSelect">{{ __('pets.filter.breed') }}</label>
                    <select class="form-control" id="breedSelect" name="breed">
                        @foreach ($breeds as $breed)
                        @if ($pet->breed_id == $breed->id)
                        <option value="{{ $breed->id }}" selected>{{ $breed->name }}</option>
                        @else
                        <option value="{{ $breed->id }}">{{ $breed->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                {{-- Gender --}}
                <div class="card-body">
                    <label for="genderSelect">{{ __('pets.filter.gender') }}</label>
                    <select class="form-control" id="genderSelect" name="gender">
                        @foreach ($genders as $gender)
                        @if ($pet->gender_id == $gender->id)
                        <option value="{{ $gender->id }}" selected>{{ $gender->value }}</option>
                        @else
                        <option value="{{ $gender->id }}">{{ $gender->value }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                {{-- AnimalType --}}
                <div class="card-body">
                    <label for="animalTypeSelect">{{ __('pets.filter.gender') }}</label>
                    <select class="form-control" id="animalTypeSelect" name="animalType">
                        @foreach ($types as $type)
                        @if ($pet->animal_type_id == $type->id)
                        <option value="{{ $type->id }}" selected>{{ $type->name }}</option>
                        @else
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
                {{-- Description --}}
                <div class="card-body">
                    <label for="animalDescription">{{ __('description') }}</label>
                    <textarea class="form-control" id="animalDescription" rows="3" name="description">{{ $pet->description }}</textarea>
                </div>
                {{-- Arrival date --}}
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        <small class="form-text text-muted">
                            {{ __('pets.arrival') }}: {{ $pet->arrival_date }}
                        </small>
                    </li>
                </ul>

                <div class="card-body">
                    <div class="d-flex bd-highlight">
                        {{-- Disable --}}
                        <div class="p-1 flex-grow-1 bd-highlight">
                            <div class="custom-control custom-switch">
                                <input type="checkbox" class="custom-control-input" id="isDisabled"
                                    @if ($pet->isDisabled)
                                        checked
                                    @endif
                                    name="isDisabled" data-animate="true">
                                <label class="custom-control-label label-disabled" for="isDisabled">{{ __('pets.disabled') }}</label>
                            </div>
                        </div>
                        <div class="p-1 bd-highlight">
                            {{-- Cancel --}}
                        <a href="{{ route('pet.show', ['id' => $pet->id]) }}" class="btn btn-dark btn-lg px-4" title="{{ __('pets.cancel') }}">
                                <i class="far fa-times-circle"></i>
                            </a>
                            {{-- Save --}}
                            {{-- <a href="#" class="btn btn-success btn-lg px-4" title="{{ __('pets.save') }}">
                                <i class="far fa-edit"></i>
                            </a> --}}
                            <button type="submit" class="btn btn-success btn-lg px-4" id="delete-confirmation" name="submit" title="{{ __('pets.save') }}">
                                <i class="far fa-edit"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script src="{{ asset("js/pets.js") }}"></script>
@endsection