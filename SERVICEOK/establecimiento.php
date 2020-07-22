

<!DOCTYPE html>
<html lang="es">
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
    <link rel="stylesheet" href="sidemenu.css">
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
                sistema bibliotecario
            </div>
            <div class="full-reset" style="background-color:#2B3D51; padding: 10px 0; color:#fff;">
                <figure>
                    <img src="vistas/serviceook.png" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Sistema Bibliotecario</p>
            </div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="#"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; Inicio</a></li>
                    <li><a href="tipoactividad.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; GESTIONAR TIPO ACTIVIDAD</a></li>
                    <li><a href="actividad.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; GESTIONAR ACTIVIDAD</a></li>
                    <li><a href="establecimiento.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; GESTIONAR ESTABLECIMIENTO</a></li>
                    <li><a href="representante.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; REPRESENTANTE</a></li>
                    <li><a href="vistas/index.php"><i class="zmdi zmdi-home zmdi-hc-fw"></i>&nbsp;&nbsp; CONSULTAR ESTADO ESTABLECIMIENTO</a></li>

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

        <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">LISTADO DE ESTABLECIMIENTOS</h6>
            </div>
            <div class="card-body">

            <form action="agregarestablecimiento.php">
                     
            <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"> </i>&nbsp; Agregar</button><p></p>
            </form> 
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                        <th>N°</th>
                        <th>NOMBRE</th>
                        <th>TELEFONO</th>
                        <th>WHATSAPP</th>
                        <th>DELIVERY</th>
                        <th>PERMISO</th>
                        <th>RUC</th>
                        <th>CORDENADAS X</th>
                        <th>CORDENADAS Y</th>
                        <th>ESTADO</th>
                        <th>ACTIVIDAD</th>
                        <th>REPRESENTANTE</th>
                        <th>ACCIONES</th>
                        </tr>
                    </thead>


                  <?php
                      include ('conexion.php');          
                      $sql = "SELECT * FROM Establecimiento";

                      $query=mysqli_query($con, $sql);

                      while ($row= MySQLI_fetch_array($query)){
                        $establecimientoid=$row['EstablecimientoID'];
                        $nombre=$row['Nombre'];
                        $telefono=$row['Telefono'];
                        $whatsappurl=$row['WhatsappURL'];
                        $delivery=$row['Delivery'];
                        $permiso=$row['Permiso'];
                        $ruc=$row['RUC'];
                        $cordenadax=$row['CoordenadaX'];
                        $cordenaday=$row['CoordenadaY'];
                        $flagactivo=$row['FlagActivo'];
                        $actividadid=$row['ActividadID'];
                        $representanteid=$row['RepresentanteID'];
                  ?>
                        <tr>
                        <td><?php echo $establecimientoid;?></td>
                        <td><?php echo $nombre;?></td>
                        <td><?php echo $telefono;?></td>
                        <td><?php echo $whatsappurl;?></td>
                        <td><?php echo $delivery;?></td>
                        <td><?php echo $permiso;?></td>
                        <td><?php echo $ruc;?></td>
                        <td><?php echo $cordenadax;?></td>
                        <td><?php echo $cordenaday;?></td>
                        <td><?php echo $flagactivo;?></td>
                        <td><?php echo $actividadid;?></td>
                        <td><?php echo $representanteid;?></td>
                        <td>
                        <form method="POST" action="modificarEstablecimientos.php">
                        <input type="hidden" value="<?php echo $establecimientoid; ?>" name="id">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"> </i>&nbsp; Modificar</button><p></p>
                        </form> 
                      </td>
                        
                        
                        </tr>
                        <?php
                          }
                        ?>	
                  <tbody>
                  </tbody>
                </table>
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
                           Service Ok es un proyecto de los alumnos de Construccion de Software II para das soluciones a los tiempos del covid
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <h4 class="all-tittles">Desarrolladores</h4>
                        <ul class="list-unstyled">
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Gisela Flores <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Nelia Escalante <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                            <li><i class="zmdi zmdi-check zmdi-hc-fw"></i>&nbsp; Kevin Montes Oca <i class="zmdi zmdi-facebook zmdi-hc-fw footer-social"></i><i class="zmdi zmdi-twitter zmdi-hc-fw footer-social"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-copyright full-reset all-tittles">© 2020 Construccion Software II</div>
        </footer>
    </div>
</body>
</html>