<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVICE OK</title>
    <link rel="stylesheet" href="sidemenu.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    
    
    
    <link rel="stylesheet" href="css/style.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    
    <script src="js/main.js"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
</head>
<body>
<header class="main-header">
        <div class="container container--flex">
            <div class="logo-container column column--50">
                <h1 class="logo">SERVICE OK</h1>
            </div>
            <div class="main-header__contactInfo column column--50">
                
            <p class="main-header__contacInfo__adress">
                <span class="icon-map">UPT - Tacna</span>
            </p>
            </div>
        </div>
    </header>
    <div id="sidemenu" class="menu-collapsed">
        <div id="header">
            <div id="title"><span></span></div>
            <div id="menu-btn">
            <div class="btn-hamburger"></div>
            <div class="btn-hamburger"></div>
            <div class="btn-hamburger"></div>
            </div>
        </div>
     
        <div id="profile">
        <div id="photo"><img src="fondo.png" alt=""></div>

        <div id="name"><span>SERVICE OK</span></div>
        </div>

        <div id="menu-items">
            <div class="item">
                <a href="../agregartipoactividad.php">
                    <div class="icon"><img src="carpeta.png"></div>
                    <div class="title"><span> Gestionar Tipo Actividad</span></div>
                </a>
            </div>
            <div class="item separator">
                
            </div>
            <div class="item">
                <a href="../actividad.php">
                    <div class="icon"><img src="grafico-circular.png"></div>
                    <div class="title"><span> Gestionar Actividad</span></div>
                </a>
            </div>
            <div class="item separator">
                
            </div>
            <div class="item">
                <a href="../establecimiento">
                    <div class="icon"><img src="reloj.png"></div>
                    <div class="title"><span> Gestionar Establecimiento</span></div>
                </a>
            </div>
        </div>       
        
    </div>
    <body>
    
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
              <h6 class="m-0 font-weight-bold text-primary">LISTADO DE ACTIVIDADES</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="30%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                        <th>N°</th>
                        <th>NOMBRE</th>
                        <th>DESCRIPCION</th>
                        <th>ESTADO</th>
                        <th>TIPO DE ACTIVIDAD</th>
                        <th>ACCIONES</th>
                        
                        </tr>
                    </thead>


                  <?php
                      include ('conexion.php');          
                      $sql = "SELECT * FROM Actividad";

                      $query=mysqli_query($con, $sql);

                      while ($row= MySQLI_fetch_array($query)){
                        $actividadid=$row['ActividadID'];
                        $nombre=$row['Nombre'];
                        $descripcion=$row['Descripcion'];
                        $flagactivo=$row['FlagActivo'];
                        $actividadTipoID=$row['ActividadTipoID'];

                  ?>
                        <tr>
                        <td><?php echo $actividadid;?></td>
                        <td><?php echo $nombre;?></td>
                        <td><?php echo $descripcion;?></td>
                        <td><?php echo $flagactivo;?></td>
                        <td><?php echo $actividadTipoID;?></td>
                        <td>
                        <form method="POST" action="modificarActividad.php">
                        <input type="hidden" value="<?php echo $actividadid; ?>" name="id">
                        <button type="submit" class="btn btn-success btn-sm"><i class="fa fa-pencil-square-o"> </i>&nbsp; Ver</button><p></p>
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

        <script>
            const btn = document.querySelector('#menu-btn');
            const menu = document.querySelector('#sidemenu');
            btn.addEventListener('click', e => {
                menu.classList.toggle("menu-expanded");
                menu.classList.toggle("menu-collapsed");

                document.querySelector('body').classList.toggle('body-expanded');
            });
        </script>

<footer class="main-footer">
            <div class="container container--flex">
                <div class="column column--33">
                    <h2 class="column__title">Porque Visitarnos</h2>
                    <p class="column__txt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque voluptate suscipit, cum deleniti omnis esse, maxime, laudantium non praesentium amet at, repudiandae inventore. Dicta sint quas, molestiae corporis tempora, aliquid.</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Contactanos</h2>
                    <p class="column__txt">Urb las Dunas 123 - Tacna</p>
                    <p class="column__txt">telefono - 999 999 999</p>
                    <p class="column__txt">consultas@gmail.com</p>
                </div>
                <div class="column column--33">
                    <h2 class="column__title">Siguenos en nuestras redes</h2>
                    <p class="column__txt"><a href="" class="icon-facebook"></a>facebook</p>
                    <p class="column__txt"><a href="" class="icon-twitter"></a>twitter</p>
                    <p class="column__txt"><a href="" class="icon-youtube"></a>youtube</p>
                </div>
                <p class="copy">2020 Luis Fernandez | Todos los derechos reservados</p>
            </div>
    </footer>
    
</body>

</html>