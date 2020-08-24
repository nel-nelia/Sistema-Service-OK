<body>

        <?php
        include 'conexion.php';
        include_once 'config.php'; 
        if (isset($_POST['subir'])) {
            $nombre = $_FILES['archivo']['name'];
            $tipo = $_FILES['archivo']['type'];
            $tamanio = $_FILES['archivo']['size'];
            $ruta = $_FILES['archivo']['tmp_name'];
            $destino = "archivos/" . $nombre;
            if ($nombre != "") {
                if (copy($ruta, $destino)) {
                    $titulo= $_POST['titulo'];
                    $dato= $_POST['DatosID'];
                    $db=new Conect_MySql();
                    $sql = "INSERT INTO tbl_documentos(titulo,tamanio,tipo,nombre_archivo,DatosID) VALUES('$titulo','$tamanio','$tipo','$nombre','$dato')";
                    $query = $db->execute($sql);  
                    if($query){
                        header('Location: ../vistas/plantilla.php');
                    }
                } else {
                    echo "Error";
                }
            }
        }
        ?>