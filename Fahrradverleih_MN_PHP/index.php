<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<title>Login</title>

<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
	crossorigin="anonymous">


<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none;
	user-select: none;
}

@media ( min-width : 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}
</style>
<!-- Custom styles for this template -->
<link href="product.css" rel="stylesheet">

</head>
<body>

<nav class="site-header sticky-top py-1">
		<div
			class="container d-flex flex-column flex-md-row justify-content-between">
			<a class="lead py-2 d-md-inline-block" href="#">Fahrradverleih MN</a>
			<a class="py-2" href="#"> <img src="Bicycle.png" width="28"
				height="28" fill="none" stroke="currentColor" stroke-linecap="round"
				stroke-linejoin="round" stroke-width="2" class="d-block mx-auto"
				role="img" viewBox="0 0 24 24" focusable="false">
				<title>Navigation Bar</title> </img>

			</a> <a class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN">Home</a> <a
				class="py-2 d-none d-md-inline-block" 
				href="http://localhost/Fahrradverleih_MN/preise.html">Preise</a> <a
				class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/verleih.html">Verleih</a>
			<a class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/bestand.html">Bestand</a>
			<a class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/kontakt.html">Kontakt</a>
			<a class="py-2 d-none d-md-inline-block"
				href="/index.php">Login/Registrierung</a>
		</div>
	</nav>
	
	<div class="bgimg1 height500px">
		<div class="col-md-5 p-lg-5 mx-auto my-5">
			<h1 class="display-4 font-weight-normal"><p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p></h1>
			<p class="lead font-weight-normal">Treten sie der Welt des Bikesharing bei!</p>
			<a class="btn btn-outline-secondary"
				href="http://localhost/Fahrradverleih_MN/index.html">Zurück zu Home</a>
				<a class="btn btn-outline-secondary"
				href="index.php?logout='1'">Logout</a>
		</div>
	</div>
	

<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="textDiv" >
      		<p>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</p>
      </div>
  	<?php endif ?>
   
</div>

<footer class="container py-5">
		<div class="row">
			<div class="col-12 col-md">
				<img src="Bicycle2.png" width="28" height="28" fill="none"
					stroke="currentColor" stroke-linecap="round"
					stroke-linejoin="round" stroke-width="2" class="d-block mx-auto"
					role="img" viewBox="0 0 24 24" focusable="false">
				<circle cx="12" cy="12" r="10" />
				<path
					d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94" />

				</svg>
				<small class="d-block mb-3 text-muted">&copy;2019</small>
			</div>
			<div class="col-6 col-md">
				<h5>Preise</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Unsere Preise</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Verleih</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Unser Fahrradverleih</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Bestand</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Unser Fahrradbestand</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Kontakt</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted" href="#">Kontaktformular</a></li>
					<li><a class="text-muted" href="#">Impressum</a></li>
				</ul>
			</div>
		</div>
	</footer>
		
</body>
</html>
