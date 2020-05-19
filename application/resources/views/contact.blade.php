{{-- Extend child layout -> which extends the app layout --}}
@extends('layouts.app')
{{-- Extend childs title --}}
@section('title','Contact')
{{-- Extend the parents (App layout) content section --}}
@section('content')
<section class="contact-mobile-details-container">
    <h1 class="contact-h1">CONTACT US</h1>
      <article class="contact-text-article">
        <p class="contact-text-p">
          If you are interseted in Pet adoption please call us  <i class="contact-icons-text fas fa-phone"></i><span class="span-contact"> +48 515 287 797</span>, send an email <i class=" contact-icons-text fas fa-envelope"></i><span class="span-contact"> miastodobredlazwierzat@wp.pl
          </span>
          or find us on social media
        </p>
        <div class="contact-icons">
         
          <p class="contact-icons-p">
            <a href="https://www.facebook.com/KolegiumMilosnikowZwierzat/">
            <i class="contact-icons-i fab fa-facebook"></i></a>
          </p>
      
          <p class="contact-icons-p">
            <a href="https://instagram.com/miasto_dobre_dla_zwierzat?igshid=1opqn74vuued5">
            <i id="icon-inst" class="contact-icons-i fab fa-instagram-square"></i></a>
          </p>
        </div>
         <iframe id="contact-google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d300867.7988795852!2d20.224462479193345!3d53.90456297479541!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46e2893e31127ddf%3A0xed39857ddf27278e!2sDobre%20Miasto%2C%20Poland!5e0!3m2!1sen!2slu!4v1588102541769!5m2!1sen!2slu" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </iframe>
      </article>
    </section>
@endsection