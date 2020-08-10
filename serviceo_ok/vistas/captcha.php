
<?php
	
	if(!empty($_POST)){
		
		$name = $_POST['name'];
		$captcha = $_POST['g-recaptcha-response'];
		
		$secret = '6Lc1trwZAAAAAB2-glo_aMMgvWr2I9IclMLJe3ew';
		
		if(!$captcha){
 
			echo "Por favor verifica el captcha";
			
			} else {
			
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
			
			$arr = json_decode($response, TRUE);
			
			if($arr['success'])
			{
				echo '<h2>Gracias</h2>';
				} else {
				echo '<h3>Error al comprobar Captcha </h3>';
			}
		}
	}
?>

<html>
	<head>
        <title>Google Recapcha</title>
        
		
		<script src='https://www.google.com/recaptcha/api.js'></script>
		
	</head>
	<body>	
		<form id="form" action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			Usuario: <input type="text" name="name">
			<br><br>
			<div class="g-recaptcha" data-sitekey="6Lc1trwZAAAAAF2bw2a3moWEsl5hmIb8CeXVoKgW"></div>
			<br>
			<input type="submit" name="login" value="Login">
			
		</form>
    </body>
    

</html>