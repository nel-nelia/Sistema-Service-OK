
<?php
require 'conexion.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $rate = $_POST["rate"];
    $sql= "INSERT INTO ratee(rate, EstablecimientoID) VALUES ('$rate','$name')";
    if(mysqli_query($con, $sql))
    {
        echo "NEW RATE ADDDED";
    }
    else{
        echo "Error: " .$sql."<br>".mysqli_error($con);
    }
    mysqli_close($con);
}
?>