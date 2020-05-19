{{-- Extend Layout --}}
@extends('layouts.app')
{{-- Set title --}}
@section('title','About Us')
{{-- Set content --}}
@section('content')

<section class="aboutus-mobile-details-container">
    <div class="about-us-image-text-top">
      <img class="aboutus-img-top" src="../images/aboutus-img1.jpeg" alt="">
      <h1 class="aboutus-h1">ABOUT US</h1>
    </div>
      <article class="aboutus-text-article">
        <p class="aboutus-text-p">
          The <strong>City Good for Pets</strong> association is a non-
          profit organization founded by volunteers -
          enthusiasts - animal lovers in every form since
          August 2013.
        </p>
        <p class="aboutus-text-p">
          Our main goal is to help homeless, sick and abandoned animals, ensure their safety, health
          care and as a main aim – find them permanent home.
        </p>
        <p class="aboutus-text-p">
          We operate in a beautiful area, very attractive for
          tourists - Warmia and Mazury, but apart from
          attractiveness of the region, this area is not one
          of the richest regions of Poland, often forgotten
          by people, government, and poorness supports
          bad habits toward animals.
        </p>
        <p class="aboutus-text-p">
          We do our best to ensure good living for our
          pets, but we also need your help - in any form -
          donations, products, food, medicines.
        </p>
        <p class="aboutus-text-p">
          We make a living from membership contributions
          and donations. Most of us are professionally
          active on a daily basis and we help animals after
          work hours.
        </p>
        <p class="aboutus-text-p">
          Now, when you dream about helping defenseless
          pets, from the comfort of your personal
          computer, you can search for the animals that
          the most fulfil your needs and expectations
          (when it comes to adoption) and how you can
          help. Any help counts.
        </p>
      </article>
    </section>

@endsection

