@extends('plantilla')
@section('titulo', 'Login' )
@section('Contenido')

  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
  .jumbotron {
    background-color: #1E90FF;
    color: #fff;
    background-position: 0% 25%;
    background-size: cover;
    background-repeat: no-repeat;
  
    text-shadow: black 0.3em 0.3em 0.3em;

  }
  </style>
</head>
<body>

<div class="jumbotron text-center">
    <img src="data:image/png;base64,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" class="img-rounded">
  <h1>LA CASA DEL CELULAR</h1> 
  <p>Bienvenidos</p> 
  <br>
  <form class="form-horizontal" action="/action_page.php">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Nombre:</label>
      <div class="col-sm-8">
        <input type="email" class="form-control" id="email" placeholder="Ingrese su Correo o Nombre" name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Contraseña:</label>
      <div class="col-sm-8">          
        <input type="password" class="form-control" id="pwd" placeholder="Ingrese la Contraseña" name="pwd">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button href="/home"type="submit" class="btn btn-default">Inicio</button>
      </div>
    </div>
  </form>
</div>
    <br>
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p><b>LA CASA DEL CELULAR</b><br> Derechos Resevados <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 2021 <a href="" data-toggle="tooltip" title="Visit w3schools"></a></p> 
</footer>
</body>
@endsection