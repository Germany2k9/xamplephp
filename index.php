<?php 
if (isset($_COOKIE['pais'])) {
	$pais = $_COOKIE["pais"];
	header("Location: inicio-".$pais.".php");
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie-edge">
	<link rel="stylesheet"  type="text/css" href="css/bootstrap.css">
  	<link rel="stylesheet"  type="text/css" href="css/style.css">
  	<link rel=”shortcut icon” type=”image/png” href=”img/favicon.png”/>
   	<link rel="stylesheet"  type="text/css" href="css/alertify.min.css">
	<!-- <link rel="stylesheet"  type="text/css" href="css/bootstrap.min.css"> -->
	<title>Document</title>
</head>
<body>
  <div class="container">
  <h2 class="text-center">Desde donde nos visitas?</h2>
  <div class="row">
	  <div class="col-4 text-center"><a href="crear-cookie.php?pais=es"><img src="img/flag-es.svg" width="100" /></a></div>
	  <div class="col-4 text-center"><a href="crear-cookie.php?pais=fr"><img src="img/flag-fr.svg" width="100" /></a></div>
	  <div class="col-4 text-center"><a href="crear-cookie.php?pais=du"><img src="img/flag-du.svg" width="100" /></a></div>
  </div>

	  <h2 class="text-center">This is a test  la prueba mas larga del miundo</h2>
	  <h4>como es que np aparefe el button para pushear</h4>
	  <div class="punto"> esto es una prueba si pushesa </div>
  </div>
	
  

	 <script src="js/jquery-3.4.1.min.js"></script>
	 <script src="js/popper.min.js"></script>
	 <script src="js/bootstrap.min.js"></script>
  	 <script src="js/alertify.min.js"></script>
   	 <script src="alertify/alertify.min.js"></script>
   	 <script src="moment/moment-with-locales.js"></script>
	 <script>
	 	$( document ).ready(function() {
 	 	console.log("Are /you READY!!");
      
   		 });
 
	</script>
  <script src="https://kit.fontawesome.com/a03bedb3c1.js" crossorigin="anonymous"></script>
</body>
</html>