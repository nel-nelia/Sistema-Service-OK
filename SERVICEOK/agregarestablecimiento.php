<!DOCTYPE html>
<html lang="es">
<head>
    <title>Administradores</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/book.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile custom-scroll-containers">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                Service ok
            </div>
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="assets/img/logo.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Sistema Bibliotecario</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="#"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li><a href="tipoactividad.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; GESTIONAR TIPO ACTIVIDAD</a></li>
                    <li><a href="actividad.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; GESTIONAR ACTIVIDAD</a></li>
                    <li><a href="establecimiento.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; GESTIONAR ESTABLECIMIENTO</a></li>
                    <li><a href="home.html"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; CONSULTAR ESTADO ESTABLECIMIENTO</a></li>

                    </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="assets/img/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles">Admin Name</span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="index.html" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
            </ul>
        </nav>
                 <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                            <h6 class="m-0 font-weight-bold text-primary">AGREGAR ESTABLECIMIENTO</h6>
                            </div>
                            <div class="card-body">                         
                                   
                                    <!---modificar datos -->                              
                   
                                  
                                <form action="procesos/agregarestablecimiento.php" method="POST">                              
  
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nombres</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="Nombre" name="Nombre" class="form-control" required></div>
                                    </div>   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Telefono</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="Telefono" name="Telefono" class="form-control" required></div>
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Whatssap</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="WhatsappURL" name="WhatsappURL" class="form-control" required></div>
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Delivery</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="Delivery" name="Delivery" class="form-control" required></div>
                                    </div> 

                                   
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Permiso</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="Permiso" name="Permiso" class="form-control" required></div>
                                    </div> 
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">RUC</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="RUC" name="RUC" class="form-control" required></div>
                                    </div> 

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Latitud</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="CoordenadaX" name="CoordenadaX" class="form-control" required></div>
                                    </div>   

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Longitud</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="CoordenadaY" name="CoordenadaY" class="form-control" required></div>
                                    </div>  

                                    
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Estado</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="FlagActivo" name="FlagActivo" class="form-control" required></div>
                                    </div>       

                                    <div class="col-md-4 col-sm-6 mb-2 mb-sm-0">
                                        <label for="name1">Actividad</label>
                                        <select id="ActividadID" class="form-control" name="ActividadID" required>
                                            <?php
                                            include "conexion.php";  
                                            $query=$con->query("select * from actividad");
                                            $countries = array();
                                            while($r=$query->fetch_object()){ $countries[]=$r; }
                                            ?>
                                            <?php foreach($countries as $c):?>
                                                <option value="<?php echo $c->ActividadID; ?>"><?php echo $c->Nombre; ?></option>
                                            <?php endforeach; ?>
                                        </select> 
                                    </div>

                                    <div class="col-md-4 col-sm-6 mb-2 mb-sm-0">
                                        <label for="name1">Representante</label>
                                        <select id="RepresentanteID" class="form-control" name="RepresentanteID" required>
                                            <?php
                                            include "conexion.php";  
                                            $query=$con->query("select * from representante");
                                            $countries = array();
                                            while($r=$query->fetch_object()){ $countries[]=$r; }
                                            ?>
                                            <?php foreach($countries as $c):?>
                                                <option value="<?php echo $c->RepresentanteID; ?>"><?php echo $c->CorreoEmpresarial; ?></option>
                                            <?php endforeach; ?>
                                        </select> 
                                    </div>              
                                                                    
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-plus"></i> Guardar
                                    </div>                                 
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    

        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        <footer class="footer full-reset">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Acerca de</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam quam dicta et, ipsum quo. Est saepe deserunt, adipisci eos id cum, ducimus rem, dolores enim laudantium eum repudiandae temporibus sapiente.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrollador</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Carlos Alfaro <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2016 Carlos Alfaro</div>
        </footer>
    </div>

    <script src="assets/jquery-1.12.4-jquery.min.js"></script> 

<!-- Bootstrap core JavaScript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>