{{-- Extend Layout --}}
@extends('layouts.app')
{{-- Set title --}}
@section('title','Adopt A Pet | Donate')
{{-- Set content --}}
@section('content')
<section id="donate-page" class="row">
  <section id="donate-text" class="m-auto">
    <h2 class="col-10 m-auto">Donate</h2>
    <p class="col-10 m-auto">
      We would greatly appreciate any donations, all of which will be used
      to help our furry friends in need!
    </p>
  </section>
  <section id="donate-btns" class="m-auto col-10">
    <div id="donate-paypal" class="m-auto">
      <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=S5YU84B7QGY7Y&source=url">
        <button type="button" class="btn btn-primary btn-lg">Donate with Paypal</button>
      </a>
      <p>Powered by Paypal</p>
    </div>
    <div id="donate-stripe" class="m-auto">
      <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#stripe-card">Donate
        with Card</button>
      <p>Powered by Stripe</p>
    </div>
  </section>
</section>
<div class="modal fade" id="stripe-card" tabindex="-1" role="dialog" aria-labelledby="modal-label">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title mx-auto" id="modal-label-don">One time Donation</h4>
      </div>
      <div class="modal-body" id="mod-bodD">
        @if (Auth::check())
        <div id="donate-results" class="col-10 mx-auto"></div>
        @else
        <div id="donate-results" class="col-10 mx-auto">
          <p>You are not logged in. You are about to make an anonymous donation.</p>
        </div>
        @endif
        <form action="" method="" id="payment-form">
          <div class="form-row">
            <input class="col-12 donateInput" required type="text" id="nameD" placeholder="Name...">
            <input class="col-12 donateInput" required type="email" id="emailD" placeholder="E-mail...">
            <input class="col-12 donateInput" required type="number" step="0.01" id="amountD"
              placeholder="Amount in EURO...">
            <div id="card-element" class="col-12">
              <!-- A Stripe Element will be inserted here. -->
            </div>
            <!-- Used to display form errors. -->
            <div id="card-errors" class="mx-auto" role="alert"></div>
          </div>
          <button id="donate" class="btn btn-lg btn-primary col-12">Donate</button>
        </form>
        <a id="rec-url" href=""><button id="receipt" class="btn btn-lg btn-primary col-12">View receipt</button></a>
        <button class="btn btn-lg btn-primary col-12" data-toggle="modal" data-target="#stripe-card">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script src="https://code.jquery.com/jquery-3.5.0.min.js"
  integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
<script src="https://js.stripe.com/v3/"></script>
<script src="{{ asset("js/stripe.js") }}"></script>
@endsection