<?php 
session_start();
$usuario = $_SESSION['username'];

if( !isset($usuario)){
	header ("location: ../index.php");
}else{
	
}
?>
<!DOCTYPE html>
<head>
<title>Service OK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css/font.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js/jquery2.0.3.min.js"></script>

<link rel="stylesheet" type="text/css" href="css/style.css"> 
</head>
<body>
<section id="container">
<!--header start-->
<header class="header fixed-top clearfix">
<!--logo start-->
<div class="brand">

    <a href="index.html" class="logo">
        SERVICE OK
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>
<!--logo end-->

        <!-- menu-->
    <?php include 'menu.php';?>

<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a href="principal.php">
                        <i class="fa fa-hand-o-left"></i>
                        <span>Atras</span>
                    </a>
                </li>
                
               
            </ul>            
        </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		
    <div class="col-6 p-2 d-flex justify-content-center">
                <button class="btn btn btn-primary" data-toggle="modal" data-target="#tipo"> Agregar</button>
             </div>

      <div class="content">
            <div class="col-lg-12">
                <div class="card">
                          <div class="card-body">
                              <div class="row">
                                      <div class="col-sm-12 col-lg-12 text-center"><br>
                                          <div class="input-group">
                                              <div class="input-group-btn">
                                                  <button class="btn btn-primary" onclick="load(1)">
                                                      <i class="fa fa-search"></i> Buscar
                                                  </button>
                                              </div>
                                              <input type="text" class="form-control" id="q" onkeyup="load(1)" style="text-transform: uppercase;">
                                          </div>
                                      </div><br><br><br>
                                      <div id="loader" style="position: absolute; text-align: center; top: 55px;  width: 100%;display:none;" class="col-sm-12 text-center"></div><!-- Carga gif animado -->
                                      <div class="col-sm-12 outer_div" ></div><!-- Datos ajax Final -->
                                  </div>
                              </div>
                          </div>
                </div>
            </div>

        
      </div>
      <div class="modal fade bd-example-modal-sm" id="tipo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar Establecimiento</h5>
                            <button class="close" type="button"  data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">X</span>
                            </button> 
                          </div>
                          <form action="../controladores/guardarestablecimiento.php" method="POST">
                            <div class="modal-body ">  
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="selectSm">Establecimiento</label>
                                        <input type="text" id="establecimiento" name="establecimiento"  class="form-control">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="selectSm">Direccion</label>
                                        <input type="text" id="direccion" name="direccion"  class="form-control">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="selectSm">Telefono</label>
                                        <input type="text" id="Telefono" name="Telefono"  class="form-control">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="selectSm">Delivery</label>
                                        <select class="form-control" id="delivery" name="delivery">
                                                <option selected>Elegir...</option>
                                                <option value="SI">SI</option>
                                                <option value="NO">NO</option>
                                            </select> 
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="selectSm">RUC</label>
                                        <input type="text" id="ruc" name="ruc"  class="form-control">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="selectSm">Tipo Actividad</label>
                                        <select id="ActividadID" name="ActividadID"  class="form-control">
                                                            <?php
                                                            $sql="SELECT * FROM actividad";
                                                            $res=mysqli_query($con,$sql);
                                                            while ($rw= mysqli_fetch_array($res)){
                                                                echo "<option value=".$rw["ActividadID"].">".$rw["Nombrea"]."</option> ";
                                                            } 
                                                            ?>
                                                </select>
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="selectSm">Latitud</label>
                                        <input type="text" id="latitud" name="latitud"  class="form-control">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="selectSm">Longitud</label>
                                        <input type="text"  id="longitud" name="longitud" class="form-control">
                                    </div>

                                    <div class="form-group col-md-3">
                                        <label for="selectSm">Distrito</label>
                                        <input type="text" id="Distrito" name="Distrito"  class="form-control">
                                    </div>               

                                    <div class="form-group col-md-3">
                                        <label for="selectSm">Estado</label>
                                        <select class="form-control" id="estado" name="estado">
                                                <option selected>Elegir...</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Inactivo">Inactivo</option>
                                            </select> 
                                    </div>                 

                                </div>
                      
                            </div>

                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                                <button class="btn btn-primary"  type="submit">Guardar</button>
                            </div>
                       </form>

                      </div>
                </div>       
              </div> 

        <footer class="panel-footer">
        <div class="row">
            
            <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
            </div>
            <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
                <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
                <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
            </div>
        </div>
        </footer>
    </div>

      
</section>
 <!-- footer -->
		  <div class="footer">
			<div class="wthree-copyright">
			  <p>© 2020 Service OK. All rights reserved | Design by <a href="">C II</a></p>
			</div>
		  </div>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="js/main.js"></script>   
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

        <script >
        jQuery(document).ready(function($){
            load(1);
        });  
        function load(page){
            var q= $("#q").val();
            $("#loader").fadeIn('slow');
            $.ajax({
                url:'./ajax/buscador.php?action=ajax&page='+page+'&q='+q,
                beforeSend: function(objeto){
                $('#loader').html('<img src="./images/ajax-loader.gif"> Cargando...');
            },
                success:function(data){ 
                    $(".outer_div").html(data).fadeIn('slow');
                    $('#loader').html('');
                    
                },
                error:function(error){
                    console.log(error);
                }
            })
        }
        </script>

         <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>

    <script type="text/javascript">
      function myFunction() {
        $.ajax({
          url: "../php/notificaciones.php",
          type: "POST",
          processData:false,
          success: function(data){
            $("#notification-count").remove();                  
            $("#notification-latest").show();$("#notification-latest").html(data);
          },
          error: function(){}           
        });
      }
                                 
      $(document).ready(function() {
        $('body').click(function(e){
          if ( e.target.id != 'notification-icon'){
            $("#notification-latest").hide();
          }
        });
      });                                     
    </script>
</body>
</html>
