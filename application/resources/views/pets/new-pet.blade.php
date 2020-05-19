{{-- Set template --}}
@extends('layouts.app')
{{-- Set title --}}
@section('title','Adopt A Pet')
{{-- Set content --}}
@section('content')


<div class="row justify-content-center my-2">
    <div class="col-sm-6">
        <div class="card">
            <h5 class="card-header">{{ __('pets.new.wizard') }}</h5>
            <div class="card-body">
                <h5 class="card-title">{{ __('pets.new.title') }}</h5>
                <p class="card-text">{{ __('pets.new.header') }}</p>

                <form action="/pet/create" method="POST">
                    @csrf
                    <div class="col-sm-12 my-1">
                        <input class="form-control mr-sm-2" type="search" id="filterName" name="petName"
                            placeholder="{{ __('pets.filter.name') }}">
                    </div>
                    <div class="col-sm-12 my-2">
                        <label class="mr-sm-2 sr-only" for="filterGender">{{ __('pets.filter.gender') }}</label>
                        <select class="custom-select mr-sm-2" id="filterGender" name="petGender">
                            <option hidden disabled selected value>{{ __('pets.filter.gender') }}</option>
                            @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}">{{ $gender->value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12 my-2">
                        <label class="mr-sm-2 sr-only" for="filterType">{{ __('pets.filter.type') }}</label>
                        <select class="custom-select mr-sm-2" id="filterType" name="petType">
                            <option hidden disabled selected value>{{ __('pets.filter.type') }}</option>
                            @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12 my-2">
                        <label class="mr-sm-2 sr-only" for="filterBreed">{{ __('pets.filter.breed') }}</label>
                        <select class="custom-select mr-sm-2" id="filterBreed" name="petBreed">
                            <option hidden disabled selected value>{{ __('pets.filter.breed') }}</option>
                            @foreach ($breeds as $breed)
                            <option value="{{ $breed->id }}">{{ $breed->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-12 my-2 custom-control custom-switch" style="position: relative; left: 35px;">
                        <input type="checkbox" class="custom-control-input" id="isDisabled" name="petIsDisabled"
                            data-animate="true">
                        <label class="custom-control-label label-disabled" for="isDisabled">{{ __('disabled')}}</label>
                    </div>
                    <div class="col-sm-12 my-2">
                        <label for="description">{{ __('pets.description') }}</label>
                        <textarea class="form-control" id="description" name="petDescription" rows="3"></textarea>
                    </div>
                    <div class="col-sm-12 my-12">
                        <button class="btn btn-outline-success my-2 my-sm-0 btn-block" id="filter" type="submit"><i
                                class="far fa-plus-square"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')
<script src="{{ asset("js/pets.js") }}"></script>
@endsection