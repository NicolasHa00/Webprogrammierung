<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<title>Fahrradverleih MN</title>

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
<link href="product.css" rel="stylesheet">
<script type="text/javascript" src="server.php"></script>
</head>
<body>
	<nav class="site-header sticky-top py-1">
		<div
			class="container d-flex flex-column flex-md-row justify-content-between">
			<a class="lead py-2 d-md-inline-block" href="#">Fahrradverleih MN</a>
			<a class="py-2" href="#"> <svg height="25" width="30"
					fill="white" class="d-block mx-auto" viewBox="0 0 25 30"
					focusable="false">
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
			</a> <a class="py-2 d-none d-md-inline-block" href="#">Home</a> <a
				class="py-2 d-none d-md-inline-block"
				href="preise.php">Preise</a> <a
				class="py-2 d-none d-md-inline-block"
				href="verleih.php">Verleih</a> <a
				class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/bestand.jsp">Bestand</a> <a
				class="py-2 d-none d-md-inline-block"
				href="kontakt.php">Kontakt</a> 
				<a class="py-2 d-none d-md-inline-block" href="../Fahrradverleih_MN_PHP/loggedIn.php" >An-/Abmelden</a> 


	</nav>
	

	<div class="bgimg1 height600px">
		<div class="col-md-5 p-lg-4 mx-auto margin-header">
			<h1 class=display-5>Fahrradverleih auch in ihrer Nähe!</h1>
			<p class="lead font-weight-normal">Starten Sie jetzt in die Welt
				des Fahrradleasings und erleben Sie unkomplizierte, flexible
				Fahrradvermietung zu unschlagbaren Preisen!</p>
			<a class="btn btn-outline-secondary"
				href="http://localhost/Fahrradverleih_MN_PHP/preise.php">Unser
				Portfolio</a>
		</div>
	</div>

	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
		<div
			class="bg-lightGrey mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black overflow-hidden font-bold">
			<div class="my-3 py-3">
				<p>Machen sie Fahrrad fahren zum selbstverständlichen
					Bestandteil ihrer Mobilität! Bleiben sie in Bewegung und haben sie
					Freude daran auf Bus, Bahn und Auto zu verzichten. Ihre Optionen
					für Bewegung werden durch Bikesharing interessanter und
					abwechslungsreicher.</p>
			</div>
		</div>
		<div class="bgimg2">
			<div class="my-3 p-3">
				<h2 class="display-5">Freude an Bewegung</h2>
			</div>
		</div>
	</div>

	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
		<div class="bgimg3">
			<div class="my-3 p-3">
				<h2 class="display-5">Natur genießen</h2>
			</div>
		</div>
		<div
			class="bg-lightGrey mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-black overflow-hidden font-bold">
			<div class="my-3 py-3">
				<p>Wollen sie dem Stadtverkehr entfliehen? Einfach mit unserem
					Bikesharing die Natur erkunden und genießen! Verwenden sie einen
					unserer zahlreichen Fahrradtypen in unserem Portfolio und seien sie
					für jedes Abenteuer gerüstet.</p>
			</div>
		</div>
	</div>

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
						href="http://localhost/Fahrradverleih_MN_PHP/preise.php">Unsere
							Preise</a></li>
				</ul>
			</div>
			<div class="col-6 col-md">
				<h5>Verleih</h5>
				<ul class="list-unstyled text-small">
					<li><a class="text-muted"
						href="http://localhost/Fahrradverleih_MN_PHP/verleih.php">Unser
							Fahrradverleih</a></li>
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
					<li><a class="text-muted"
						href="http://localhost/Fahrradverleih_MN_PHP/kontakt.php">Kontakt</a></li>
					<li><a class="text-muted"
						href="http://localhost/Fahrradverleih_MN/impressum.html">Impressum</a></li>
				</ul>
			</div>
		</div>
	</footer>
	
	<script src="canvas.js"></script>
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="/docs/4.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o"
		crossorigin="anonymous"></script>
	<script
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
		integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
		crossorigin="anonymous"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
		integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
		crossorigin="anonymous"></script>
</body>

</html>

