{{-- Set template --}}
@extends('layouts.app')
{{-- Set title --}}
@section('title','Adopt A Pet')
{{-- Set content --}}
@section('content')

@if (session('status'))
{{-- <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center" style="min-height: 200px;"> --}}
<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" data-delay="2000" data-animation="true"
    data-autohide="true" style="position: absolute; top: 0; right: 0;">
    <div class="toast-header">
        <img src="{{ asset('/images/icons/logo.png') }}" class="rounded mr-2" alt="..." width="48px" height="48px">
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="toast-body">
        {{ __(session('status')) }}
    </div>
</div>
{{-- </div> --}}
@endif

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

            <div class="card-body">
                <h5 class="card-title">{{ $pet->name }}</h5>
                <div class="d-flex bd-highlight">
                    <div class="p-2 flex-grow-1 bd-highlight">
                        <small class="text-muted">
                            {{ $pet->breed->name }}
                        </small>
                    </div>
                    <div class="p-2 bd-highlight">
                        {{-- Set gender icon --}}
                        @if (strcasecmp($pet->gender->value, 'male') == 0)
                        <i class="fas fa-mars"></i>
                        @elseif (strcasecmp($pet->gender->value, 'female') == 0)
                        <i class="fas fa-venus"></i>
                        @else
                        <i class="fas fa-question"></i>
                        @endif
                    </div>
                    <div class="p-2 bd-highlight">
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
            </div>
            <div class="card-body">
                <p class="card-text">{{ $pet->description }}</p>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <small class="form-text text-muted">
                        {{ __('pets.arrival') }}: {{ $pet->arrival_date }}
                    </small>
                </li>
            </ul>
            @if (Auth::user() != null)
            <div class="card-body">
                <div class="d-flex bd-highlight">
                    <div class="p-1 flex-grow-1 bd-highlight">
                        @foreach (Auth::user()->roles as $role)
                        @if (strcasecmp($role->name, 'admin') == 0)
                        {{-- Edit --}}
                        <a href="{{ route('pet.edit', ['id' => $pet->id]) }}" class="btn btn-primary btn-lg px-3"
                            title="{{ __('pets.edit') }}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        @if (!$pet->isDisabled)
                        {{-- Disable --}}
                        <a class="btn btn-danger btn-lg px-3" title="{{ __('pets.disable') }}" data-toggle="modal"
                            data-target="#disable-confirmation">
                            <i class="far fa-eye-slash"></i>
                        </a>
                        @else
                        {{-- Enable --}}
                        <a class="btn btn-success btn-lg px-3" title="{{ __('pets.enable') }}" data-toggle="modal"
                            data-target="#enable-confirmation">
                            <i class="far fa-eye"></i>
                        </a>
                        @endif
                        @php
                        $isReturn = false;
                        foreach ($pet->animal_users as $au) {
                        if ($au->arrival_date == null && ($au->isFoster || (!$au->isFoster && !$au->isSponsor))) {
                        $isReturn = true;
                        break;
                        }
                        }
                        @endphp
                        {{-- Return --}}
                        @if ($isReturn)
                        <a class="btn btn-warning btn-lg px-3" title="{{ __('pets.return') }}" data-toggle="modal"
                            data-target="#return-confirmation">
                            <i class="fas fa-undo-alt"></i>
                        </a>
                        @endif
                        @break
                        @endif
                        @endforeach
                    </div>
                    {{-- Only pets enabled can be AFS --}}
                    @if (!$pet->isDisabled)
                    <div class="p-1 bd-highlight">
                        {{-- sponsor --}}
                        @php
                        $auSponsor = true;
                        foreach ($pet->animal_users as $au) {
                        if (!$au->isSponsor && !$au->iSFoster && $au->arrival_date == null) {
                        $auSponsor = false;
                        continue;
                        }
                        $auSponsor = true;
                        break;
                        }
                        @endphp
                        {{-- @if ($auSponsor == null || ($auSponsor->isSponsor || $auSponsor->isFoster)) --}}
                        @if ($auSponsor)
                        <a href="#" class="btn btn-dark btn-lg px-4" title="{{ __('pets.sponsor') }}"
                            data-toggle="modal" data-target="#afsDialog" data-action="sponsor"
                            data-pet-id="{{ $pet->id }}">
                            <i class="fas fa-vr-cardboard"></i>
                        </a>
                        @endif
                        {{-- foster --}}
                        @php
                        $auFoster = null;
                        foreach ($pet->animal_users as $animal_user) {
                        if ($animal_user->arrival_date == null) {
                        $auFoster = $animal_user;
                        break;
                        }
                        }
                        @endphp
                        @if ($auFoster == null || (!$au->isFoster && $au->isSponsor))
                        {{-- @if ($auFoster) --}}
                        <a href="#" class="btn btn-secondary btn-lg px-4" title="{{ __('pets.foster') }}"
                            data-toggle="modal" data-target="#afsDialog" data-action="foster"
                            data-pet-id="{{ $pet->id }}">
                            <i class="fas fa-theater-masks"></i>
                        </a>
                        @endif
                        {{-- adopt --}}
                        @php
                        $auAdopt = null;
                        foreach ($pet->animal_users as $animal_user) {
                        if ($animal_user->arrival_date == null) {
                        $auAdopt = $animal_user;
                        break;
                        }
                        }
                        @endphp
                        @if ($auAdopt == null || ($auAdopt->isSponsor || $auAdopt->isFoster))
                        <a href="#" class="btn btn-success btn-lg px-4" title="{{ __('pets.adopt') }}"
                            data-toggle="modal" data-target="#afsDialog" data-action="adopt"
                            data-pet-id="{{ $pet->id }}">
                            <i class="fas fa-award"></i>
                        </a>
                        @endif
                    </div>
                    @endif
                </div>
            </div>
            @endif
        </div>
    </div>
    @if (Auth::user() != null)
        @foreach (Auth::user()->roles as $role)
            @if (strcasecmp($role->name, 'admin') == 0)
                <div class="table-responsive-sm text-center col-sm-8 my-2">
                    <h5>Historial</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('pets.departure') }}</th>
                                <th scope="col">{{ __('pets.arrival') }}</th>
                                <th scope="col">{{ __('pets.action') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pet->animal_users as $au)
                            <tr>
                                <td>{{ $au->departure_date }}</td>
                                <td>{{ $au->arrival_date }}</td>
                                @if (!$au->isSponsor && !$au->isFoster)
                                    <td>{{ __('pets.adopt') }}</td>
                                @else
                                @if ($au->isSponsor)
                                    <td>{{ __('pets.sponsor') }}</td>
                                @else
                                    <td>{{ __('pets.foster') }}</td>
                                @endif
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        @endforeach
    @endif
</div>


{{-- These modals are only loaded when they user has been granted access to those areas --}}
@if (Auth::user() != null)
@foreach (Auth::user()->roles as $role)
@if (strcasecmp($role->name, 'admin') == 0)
<!-- Modal Disable -->
<div class="modal fade" id="disable-confirmation" tabindex="-1" role="dialog" aria-labelledby="disable-confirmation"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('pets.disable') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ __('pets.disable.dialog', ['name' => $pet->name]) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('pets.close') }}</button>
                <form action="/pet/disable/{{ $pet->id }}" method="post">
                    @csrf
                    @method('PUT')
                    {{-- <button type="button" id="delete-confirmation" class="btn btn-danger">{{ __('pets.remove') }}</button>
                    --}}
                    <input type="submit" id="delete-confirmation" name="submit" class="btn btn-danger"
                        value="{{ __('pets.disable') }}">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Enable -->
<div class="modal fade" id="enable-confirmation" tabindex="-1" role="dialog" aria-labelledby="enable-confirmation"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('pets.enable') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ __('pets.enable.dialog', ['name' => $pet->name]) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('pets.close') }}</button>
                <form action="/pet/enable/{{ $pet->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="submit" id="delete-confirmation" name="submit" class="btn btn-success"
                        value="{{ __('pets.enable') }}">
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal Return -->
<div class="modal fade" id="return-confirmation" tabindex="-1" role="dialog" aria-labelledby="enable-confirmation"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('pets.return') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ __('pets.return.dialog', ['name' => $pet->name]) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('pets.close') }}</button>
                <form action="/pet/return/{{ $pet->id }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="submit" id="delete-confirmation" name="submit" class="btn btn-success"
                        value="{{ __('pets.return') }}">
                </form>
            </div>
        </div>
    </div>
</div>
@break
@endif
@endforeach
{{-- Modal Dialog for AFS actions --}}
<div class="modal fade" id="afsDialog" tabindex="-1" role="dialog" aria-labelledby="afsDialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="afsModalTitle" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ __('pets.afs.dialog.question', ['name' => $pet->name]) }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">{{ __('pets.close') }}</button>
                <form action="/pet/afsShow" method="get">
                    @csrf
                    <input type="submit" id="delete-confirmation" name="submit" class="btn btn-success"
                        value="{{ __('pets.confirm') }}">
                </form>
            </div>
        </div>
    </div>
</div>
@endif

@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="{{ asset("js/pets.js") }}"></script> 
@endsection