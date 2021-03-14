@extends('plantilla')

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
    margin:  black;
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

    <!-- Container (Phone Section) -->
<div id="tour" class="bg-1">
    <div class="container">
        <h3 class="text-center"><b>PRODUCTOS</b></h3>
      <p class="text-center"><br>Variedad de celulares,ofertas y accesorios</p>
      <div class="container1">
        <div class="row">
            <div class="row">
                <div class="col-md-9">
                   
                </div>
                <div class="col-md-3">
                    <!-- Controls -->
                    <div class="controls pull-right hidden-xs">
                        <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example"
                            data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-success" href="#carousel-example"
                                data-slide="next"></a>
                    </div>
                </div>
            </div>
            <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="https://movilesquality.com/pics/contenido/samsung-galaxy-note-10-plus-n975-dual-sim-256gb-plata.jpg" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Precio</h5>
                                                <h5 class="price-text-color">
                                                    L11,800</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="" class="hidden-sm">Mas Detalles</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTkTE2n_l9QUDszoCKIFMrNNQn6EirC76AcoA&usqp=CAU" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Precio</h5>
                                                <h5 class="price-text-color">
                                                    L13,000</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="" class="hidden-sm">Mas Detalles</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="https://falabella.scene7.com/is/image/FalabellaCO/9723210_1?wid=800&hei=800&qlt=70" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Precio</h5>
                                                <h5 class="price-text-color">
                                                    L5,800</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="" class="hidden-sm">Mas Detalles</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="https://s.fenicio.app/f/alisuy/productos/3-iphone-11-pro-silver_1920-1200_1604361557_485.jpg" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Precio</h5>
                                                <h5 class="price-text-color">
                                                    L12,500</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="" class="hidden-sm">Mas Detalles</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="data:image/jpeg;base64,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" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Precio</h5>
                                                <h5 class="price-text-color">
                                                    $8,500</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                               
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="" class="hidden-sm">Mas Detalles</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="https://techvenstoreca.com/wp-content/uploads/2020/04/samsung-galaxy-s20-4g-g980-8gb-ram-128gb-dual-sim-azul.jpg" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Precio</h5>
                                                <h5 class="price-text-color">
                                                    L9,800</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="" class="hidden-sm">Mas Detalles</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="data:image/jpeg;base64,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" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Precio</h5>
                                                <h5 class="price-text-color">
                                                    L7,500</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="" class="hidden-sm">Mas Detalles</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="https://tiendahuawei.com.gt/media/catalog/product/cache/fd79ca39c172cf5a18782c64c6340a1c/h/u/huawei-y7-2019-morado-01.png" class="img-responsive" alt="a" />
                                    </div>
                                    <div class="info">
                                        <div class="row">
                                            <div class="price col-md-6">
                                                <h5>
                                                    Precio</h5>
                                                <h5 class="price-text-color">
                                                    L5,500</h5>
                                            </div>
                                            <div class="rating hidden-sm col-md-6">
                                                <i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="price-text-color fa fa-star"></i><i class="price-text-color fa fa-star">
                                                </i><i class="fa fa-star"></i>
                                            </div>
                                        </div>
                                        <div class="separator clear-left">
                                            <p class="btn-add">
                                                
                                            <p class="btn-details">
                                                <i class="fa fa-list"></i><a href="" class="hidden-sm">Mas Detalles</a></p>
                                        </div>
                                        <div class="clearfix">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    
  
  
  
  
  
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                <input type="number" class="form-control" id="psw" placeholder="How many?">
              </div>
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
              </div>
                <button type="submit" class="btn btn-block">Pay 
                  <span class="glyphicon glyphicon-ok"></span>
                </button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <span class="glyphicon glyphicon-remove"></span> Cancel
            </button>
            <p>Need <a href="#">help?</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
    
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
      
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
          </div>
          <div class="modal-body">
            <form role="form">
              <div class="form-group">
                <label for="psw"><span class="glyphicon glyphicon-shopping-cart"></span> Tickets, $23 per person</label>
                <input type="number" class="form-control" id="psw" placeholder="How many?">
              </div>
              <div class="form-group">
                <label for="usrname"><span class="glyphicon glyphicon-user"></span> Send To</label>
                <input type="text" class="form-control" id="usrname" placeholder="Enter email">
              </div>
                <button type="submit" class="btn btn-block">Pay 
                  <span class="glyphicon glyphicon-ok"></span>
                </button>
            </form>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
              <span class="glyphicon glyphicon-remove"></span> Cancel
            </button>
            <p>Need <a href="#">help?</a></p>
          </div>
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
@section('titulo', 'Producto')