@extends('layouts.app')
@section('title','Home')
@section('content')

<section class="home-mobile-details-container">
  <article class="home-text-article">
    <h1 class="home-h1"><span class="home-h1-span">A Place Good For Animals!</span></h1>
        <div class="home-div-text-main">
          <h3 class="home-text-h3">
            Our mission is to help homeless pets to find a new home
          </h3>
          <h3 class="home-text-h3">
            We belive that People make a Difference - Become one of them
          </h3>
          <h4 class="home-text-p">
            Help us rescue our furry friends
          </h4>
        </div>
        <div class="donate-button">
          <a href="donate" class="btn btn-danger" role="button" aria-pressed="true">DONATE</a>
        </div>
    </article>
    <article class="home-activities">
      <div class="card home-card">
        <div class="card-body home-card-body">
          <h5 class="card-title home-card-title">Pets for Adoption</h5>
        </div>
        <a href="pets">
        <img src="../images/home-card-cat.jpg" class="card-img-top" alt="pets card">
        </a>
      </div>
      <div class="card home-card">
        <div class="card-body home-card-body">
          <h5 class="card-title home-card-title">Become a Volunteer</h5>
        </div>
        <a href="voluntary-work">
        <img src="../images/home-volunt.png" class="card-img-top" alt="volunteer card">
        </a>
      </div>


    </article>
</section>

@endsection

