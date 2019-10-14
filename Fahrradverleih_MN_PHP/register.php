<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<title>Registrierung</title>

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
<link href="style.css" rel="stylesheet">

</head>


<body>

<nav class="site-header sticky-top py-1">
		<div
			class="container d-flex flex-column flex-md-row justify-content-between">
			<a class="lead py-2 d-md-inline-block" href="#">Fahrradverleih MN</a>
			<a class="py-2" href="#"> 	
			<svg height="25" width="30" fill="white"
					class="d-block mx-auto" viewBox="0 0 25 30" focusable="false">
					<defs>
   						<linearGradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
  					    <stop offset="0%"
						style="stop-color:rgb(255,255,0);stop-opacity:1" />
    			  		<stop offset="100%"
						style="stop-color:rgb(255,0,0);stop-opacity:1" />
    					</linearGradient>
  					</defs>
					 <circle cx="7" cy="20" r="5" stroke="white" stroke-width="1"
						fill="url(#grad1)" />
					  <circle cx="23" cy="20" r="5" stroke="white" stroke-width="1"
						fill="url(#grad1)" />
						<line x1="7" y1="20" x2="10" y2="14"
						style="stroke:rgb(255,255,255);stroke-width:1" />
						<line x1="23" y1="20" x2="20" y2="14"
						style="stroke:rgb(255,255,255);stroke-width:1" />
						<line x1="10" y1="14" x2="20" y2="14"
						style="stroke:rgb(255,255,255);stroke-width:1" />
						<line x1="10" y1="14" x2="15" y2="20"
						style="stroke:rgb(255,255,255);stroke-width:1" />
						<line x1="20" y1="14" x2="15" y2="20"
						style="stroke:rgb(255,255,255);stroke-width:1" />
						<line x1="10" y1="14" x2="10" y2="11"
						style="stroke:rgb(255,255,255);stroke-width:1" />
						<line x1="20" y1="14" x2="20" y2="12"
						style="stroke:rgb(255,255,255);stroke-width:1" />
						<line x1="20" y1="12" x2="22" y2="12"
						style="stroke:rgb(255,255,255);stroke-width:1" />
						<line x1="22" y1="12" x2="22" y2="10"
						style="stroke:rgb(255,255,255);stroke-width:1" />
					<ellipse cx="10" cy="10" rx="1.5" ry="0.8"
						style="fill:url(#grad1);stroke:white;stroke-width:1" />
				</svg>

			</a> <a class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN">Home</a> <a
				class="py-2 d-none d-md-inline-block" 
				href="http://localhost/Fahrradverleih_MN/preise.html">Preise</a> <a
				class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/verleih.html">Verleih</a>
			<a class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/bestand.jsp">Bestand</a>
			<a class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/kontakt.html">Kontakt</a>
			<a class="py-2 d-none d-md-inline-block"
				href="/index.php">Anmelden</a>
		</div>
	</nav>
	
	<div class="bgimg13 height300px">
		<div class="col-md-5 p-lg-4 mx-auto margin-header">
			<h1 class="display-5">Registrieren</h1>
			<p class="lead font-weight-normal">Treten sie der Welt des Bikesharing bei!</p>
			<a class="btn2 btn22-outline-secondary"
				href="http://localhost/Fahrradverleih_MN/index.html">Zurück zu Home</a>
		</div>
	</div>


  <div class="header">
  	<h2>Registrieren</h2>
  </div>
	
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Benutzername</label>
  	  <input type="text" name="username" required value="<?php echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" required value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Passwort</label>
  	  <input type="password" name="password_1" required minlength="8">
  	</div>
  	<div class="input-group">
  	  <label>Passwort bestätigen</label>
  	  <input type="password" name="password_2" required minlength="8">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn btn-outline-secondary" name="reg_user">Registrieren</button>
  	</div>
  	<p>
  		Bereits Mitglied? <a href="login.php">Anmelden</a>
  	</p>
  </form>
  
 <footer class="container py-5">
		<div class="row">
			<div class="col-12 col-md">
				<canvas id="Canvas" width="50" height="50"
					style="border: 1px solid #d3d3d3;"> </canvas>
			</div>
			<div class="col-6 col-md">
				<h5>Preise</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted"
						href="http://localhost/Fahrradverleih_MN/preise.html">Unsere
							Preise</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Verleih</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted"
						href="http://localhost/Fahrradverleih_MN/verleih.html">Unser
							Fahrradverleih</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Bestand</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted"
						href="http://localhost/Fahrradverleih_MN/bestand.jsp">Unser
							Fahrradbestand</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Kontakt</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted"
						href="http://localhost/Fahrradverleih_MN/kontakt.html">Kontakt</a></li>
					<li><a class="text-muted"
						href="http://localhost/Fahrradverleih_MN/impressum.html">Impressum</a></li>
				</ul>
			</div>
		</div>
	</footer>
	
	<script src="canvas.js"></script>
</body>
</html>