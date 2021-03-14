@extends('plantilla')
@section('titulo', 'Acerca de' )
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
      
      .bg-1 {
        background: #54B6D6;
        color: #3B2A2A;
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
      
    
    
    .col-item
    {
        border: 1px solid #E1E1E1;
        border-radius: 5px;
        background: #FFF;
    }
    .col-item .photo img
    {
        width: 90%;
        margin: 5 black;
        height: 35vh;
    }
    
    .col-item .info
    {
        padding: 10px;
        border-radius: 0 0 5px 5px;
        margin-top: 1px;
    }
    
    .col-item:hover .info {
        background-color: #F5F5DC;
    }
    .col-item .price
    {
        /*width: 50%;*/
        float: left;
        margin-top: 5px;
    }
    
    .col-item .price h5
    {
        line-height: 20px;
        margin: 0;
    }
    
    .price-text-color
    {
        color: #219FD1;
    }
    
    .col-item .info .rating
    {
        color: #777;
    }
    
    .col-item .rating
    {
        /*width: 50%;*/
        float: left;
        font-size: 17px;
        text-align: right;
        line-height: 52px;
        margin-bottom: 10px;
        height: 52px;
    }
    
    .col-item .separator
    {
        border-top: 1px solid #E1E1E1;
    }
    
    .clear-left
    {
        clear: left;
    }
    
    .col-item .separator p
    {
        line-height: 20px;
        margin-bottom: 0;
        margin-top: 10px;
        text-align: center;
    }
    
    .col-item .separator p i
    {
        margin-right: 5px;
    }
    .col-item .btn-add
    {
        width: 50%;
        float: left;
    }
    
    .col-item .btn-add
    {
        border-right: 1px solid #E1E1E1;
    }
    
    .col-item .btn-details
    {
        width: 50%;
        float: left;
        padding-left: 10px;
    }
    .controls
    {
        margin-top: 20px;
    }
    [data-slide="prev"]
    {
        margin-right: 10px;
    }
    
    </style>
    
     <!-- Image of location/map -->
     <img src="https://uidesign.gbtcdn.com/GB/image/2019/20190301_8034/mobile_banner_4Sc.jpg" class="img-responsive" style="width:100%">
    <br>
    <br>
    <div align="center"><img src="data:image/png;base64,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"></div>
    <!-- Container (The Band Section) -->
    <div id="band" class="container text-center">
        <h3><b>CONOCENOS</b></h3>
      <p><em>Reseña Historica</em></p>
      <p>Sin duda, la llegada de la telefonía móvil o celular es una de las innovaciones más trascendentes en la historia de las comunicaciones. Desde que Martín Cooper (padre de la telefonía celular) hizo la primer radiollamada en 1973, los teléfonos móviles o celulares han sido perfeccionados revolucionando la forma en que nos comunicamos, acercando al mundo a la palma de la mano. El celular ha permitido a millones de personas de bajos ingresos, que no contaban con el servicio de telefonía fija, acceder a comunicaciones modernas que no sólo permiten transmitir la voz, sino también otros contenidos, tales como música, entretenimientos, mensajes de texto, etc.
    “La Casa del Celular” es una microempresa con base de operaciones en el departamento de Olancho, específicamente en el municipio de Patuca. Esta organización aprovechando el boom que se vive actualmente en el país por el uso tecnologico ha decidido incorporar productos tecnológicos y accesorios y actualizar sus procedimientos tanto de gestión como comerciales e intenta convertirse en la empresa líder en la zona. 
    Su propietario y personal han asumido con responsabilidad el reto de mantener e incrementar su capacidad competitiva impulsando, por ejemplo, los procesos de administración empresarial que buscan mejorar la calidad de atención a los clientes; por otra parte, se incursiona en la diversificación de productos y servicios.
    Ser creativos para proveer productos y servicios de máxima calidad, manteniendo la vanguardia tecnológica y siendo flexibles para satisfacer las necesidades de nuestros clientes.
    </p>
      <br>
      <div class="row">
        <div class="col-sm-4">
          <p class="text-center"><strong>MISION</strong></p><br>
          <a href="#demo" data-toggle="collapse">
            <img src="https://img.icons8.com/ios/452/mission-of-a-company.png" class="img-circle person" alt="Random Name" width="255" height="255">
          </a>
          <div id="demo" class="collapse">
            <p> Ser la primera tienda en la zona  en brindar un servicio de calidad ofreciendo a la población, con los estándares más altos y como siempre destacar en la capacitación de su Recurso Humanos, tener variedad de productos para toda ocasión, expandir nuestra empresa.</p>
           
          </div>
        </div>
        <div class="col-sm-4">
          <p class="text-center"><strong>VISION</strong></p><br>
          <a href="#demo2" data-toggle="collapse">
            <img src="https://image.flaticon.com/icons/png/512/1465/1465429.png" class="img-circle person" alt="Random Name" width="255" height="255">
          </a>
          <div id="demo2" class="collapse">
            <p>Ofrecer la mejor venta de pintura destacando en calidad, ética y profesionalismo, que permita el acceso a toda la ciudadanía llegando  y siendo conocidos a nivel departamental ser  más conocidos , que sepan que brindamos buen servicio y con calidad.</p>
            
          </div>
        </div>
        <div class="col-sm-4">
          <p class="text-center"><strong>OBJETIVO</strong></p><br>
          <a href="#demo3" data-toggle="collapse">
            <img src="https://image.flaticon.com/icons/png/512/2199/2199934.png" class="img-circle person" alt="Random Name" width="255" height="255">
          </a>
          <div id="demo3" class="collapse">
            <p>-Ser creativos para proveer productos y servicios de máxima calidad, manteniendo la vanguardia tecnológica y siendo flexibles para satisfacer las necesidades de nuestros clientes.</p>
            <p>-Consolidar el crecimiento de la empresa en todas las unidades de negocios.</p>
            <p>-Anticiparnos a las necesidades de nuestros clientes y superar sus expectativas de servicio.</p>
          </div>
        </div>
      </div>
    </div>
   
    <!-- Footer -->
    <footer class="text-center">
      <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
      <p><b>LA CASA DEL CELULAR</b><br> Derechos Resevados <span class="glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 2021 <a href="" data-toggle="tooltip" title="Visit w3schools"></a></p> 
    </footer>
    @endsection