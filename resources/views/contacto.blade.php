@extends('plantilla')
@section('titulo', 'Contacto')
@section('Contenido')

<style>
@import url(http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css);

body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #111;
  }
  .container {
    padding: 80px 120px;
  }
  .person {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 80%;
    height: 80%;
    opacity: 0.7;
  }
  .person:hover {
    border-color: #f1f1f1;
  }
  
  .carousel-caption h3 {
    color: #fff !important;
  }
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #54B6D6;
    color: #1c3fb1;
  }
  .bg-1 h3 {color: #06060F;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #1627F9;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #F96F16;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #3B2A2A;
    text-decoration: none;
  }  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  
</style>
<br>
<br>

    <!-- Container (Contact Section) -->
<div id="contact" class="container">
    <h3 class="text-center"><b>CONTACTANOS</b></h3>
  <p class="text-center"><em>Sera un placer atenderle.</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Nos Puedes Encontrar.</p>
      <p href="https://www.google.com/maps/place/Patuca/@14.3264352,-86.1171964,11z/data=!3m1!4b1!4m5!3m4!1s0x8f6c343697709b83:0x8e7e644846519104!8m2!3d14.2986821!4d-85.971322"><span class="glyphicon glyphicon-map-marker"></span>Patuca,Olancho</p>
      <p><span class="glyphicon glyphicon-phone"></span>Telfono:97563412</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Correo: lacasadelcelular@gmail.com</p>
      <p><span class="icon ion-social-facebook" aria-hidden="true"></span>Facebook: La Casa Del Celular</p>
  </div>
    <div class="col-md-8">
      <div class="row">
        <form method="POST" action={{route('Contacto')}}>   
        @csrf
        <div class="col-sm-6 form-group">
            <input class="form-control" name="fullname" placeholder="Nombre" value='{{old('fullname')}}'><br>
            {!!$errors->first('fullname', '<small>:message</small><br>')!!}
        </div>
        <div class="col-sm-6 form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" value='{{old('email')}}'><br>
            {!!$errors->first('email', '<small>:message</small><br>')!!}
        </div>
      </div>
      <input class="form-control" name="subject" placeholder="Asunto" value='{{old('subject')}}'><br>
        {!!$errors->first('subject', '<small>:message</small><br>')!!}
        <textarea name="contenido" placeholder="Mensaje" value='{{old('contenido')}}'></textarea><br>
        {!!$errors->first('contenido', '<small>:message</small><br>')!!}
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Enviar</button>
        </div>
    </form>
      </div>
    </div>
  </div>
 
@endsection