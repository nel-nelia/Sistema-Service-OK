<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">




</head>
<body>

<div class="container">
<div class="row">
<form action="calificar.php" method="post">
<div>
<h3>Student Rating System</h3>
</div>
<div>

<div id="rateYo"></div>
<label>Name</label>
<input type="text" name="name">


<div id="rateYo" id="rating"
data-rateyo-rating="4"
data-rateyo-num-stars="5"
data-rateyo-score="3">
</div>
<span class='result'>0</span>
<input type="hidden" name="rating">
</div>
<div><input type="submit" name="add"></div>
</form>
</div>
</div>
<script src="https://cndjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cndjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

<script>
$(function () {
 
 $("#rateYo").rateYo({
   starWidth: "40px"
 });

});

$(function(){
    $("#rateyo").rateYo().on("rateyo.change",function(e, data){
        var rating = data.rating;
        $(this.parent().find('.score').text('score:'+$(this).attr('data-rateyo-score'));
        $(this.parent().find('.result').text('rating');
        $(this.parent().find('input[name=rating]').val(rating);
        
        
    });

});
</script>



</body>
</html>
<?php
require 'conexion.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["name"];
    $rating = $_POST["rating"];
    $sql= "INSERT INTO ratee(name, rate) VALUES ('$name','$rating')";
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