<?php
$con = new mysqli("localhost","root","123456","serviceok");

$sql = "UPDATE datos SET estado = 1 WHERE estado = 0";	
$result = mysqli_query($con, $sql);

$sql = "SELECT * FROM datos ORDER BY id DESC limit 5";
$result = mysqli_query($con, $sql);

$response='';

while($row=mysqli_fetch_array($result)) {

	/* Formate fecha */
	$fechaOriginal = $row["fecha"];
	$fechaFormateada = date("d-m-Y", strtotime($fechaOriginal));

	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'>". $row["autor"] . " - <span>". $fechaFormateada . "</span> </div>" . 
	"<div class='notification-comment'>" . $row["mensaje"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>