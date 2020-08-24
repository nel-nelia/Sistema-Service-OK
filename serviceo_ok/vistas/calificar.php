<html>
<head>
<title>Rating System</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/estrella.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>
<form action="calificar.php" method="post">
<div class="rating-box">

    <h1>Rating System</h1>
    <label>Name</label>
   <input type="text" name="name">
      <div class="ratings">
         <span class="fa fa-star-o"></span>
         <span class="fa fa-star-o"></span>
         <span class="fa fa-star-o"></span>
         <span class="fa fa-star-o"></span>
         <span class="fa fa-star-o"></span>
      </div>
      <input type="text" name="rate" id="rating-value">
      <div><input type="submit" name="add"></div>
      </form>    
 </div>

<script src="js/tutiscript.js"></script>
</body>
</html>
<?php
require 'conexion.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $rate = $_POST["rate"];
    $sql= "INSERT INTO ratee(name, rate) VALUES ('$name','$rate')";
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