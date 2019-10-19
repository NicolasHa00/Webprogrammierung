<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<jsp:useBean id="Bean1" class="meine_servlets.Bean" scope="page">
	<jsp:setProperty name="Bean1" property="id" value="1" />
</jsp:useBean>

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
</head>
<body>
	<nav class="site-header sticky-top py-1">
		<div
			class="container d-flex flex-column flex-md-row justify-content-between">
			<a class="lead py-2 d-md-inline-block"
				href="http://localhost:8080/Fahrradverleih_MN">Fahrradverleih MN</a>
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
			</a> <a class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN">Home</a> <a
				class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/preise.html">Preise</a> <a
				class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/verleih.html">Verleih</a> <a
				class="py-2 d-none d-md-inline-block" href="#">Bestand</a> <a
				class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/kontakt.html">Kontakt</a> <a
				class="py-2 d-none d-md-inline-block" href="../index.php">An-/Abmelden</a>
		</div>
	</nav>

	<div class="bgimg12 height600px">
		<div class="col-md-5 p-lg-5 mx-auto my-5 topPadding topMargin2">
			<h1 class="display-4 font-weight-normal">Unser Fahrradbestand</h1>
			<p class="lead font-weight-normal">Informieren Sie sich hier über
				unsere verfügbaren Fahrradmodelle, die aktuell zum Ausleihen zur
				Verfügung stehen.</p>
			<a class="btn btn-outline-secondary"
				href="http://localhost/Fahrradverleih_MN/verleih.html">Zum
				Verleih</a>
		</div>
	</div>

	<div class="textDiv4">
		<p class="lead font-weight-normal">Fahrradbestand:</p>
	</div>

	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 largeMargin2">
		<table id="Bestandstabelle">
			<tr>
				<th>ID</th>
				<th>Fahrradmodell</th>
				<th>verfügbarer Bestand</th>
			</tr>
			<tr>
				<td>1</td>
				<td>Herrenrad</td>
				<td><jsp:getProperty name="Bean1" property="anzahl" />
					Fahrräder</td>
			</tr>
			<jsp:setProperty name="Bean1" property="id" value="2" />
			<tr>
				<td>2</td>
				<td>Damenrad</td>
				<td><jsp:getProperty name="Bean1" property="anzahl" />
					Fahrräder</td>
			</tr>
			<jsp:setProperty name="Bean1" property="id" value="3" />
			<tr>
				<td>3</td>
				<td>Kinderrad</td>
				<td><jsp:getProperty name="Bean1" property="anzahl" />
					Fahrräder</td>
			</tr>
			<jsp:setProperty name="Bean1" property="id" value="4" />
			<tr>
				<td>4</td>
				<td>Mountainbike</td>
				<td><jsp:getProperty name="Bean1" property="anzahl" />
					Fahrräder</td>
			</tr>
			<jsp:setProperty name="Bean1" property="id" value="5" />
			<tr>
				<td>5</td>
				<td>E-Bike</td>
				<td><jsp:getProperty name="Bean1" property="anzahl" />
					Fahrräder</td>
			</tr>
		</table>
	</div>

	<div class="textDiv4">
		<p class="lead font-weight-normal">Ihre aktuell ausgeliehenen
			Fahrräder:</p>
		<p class="fett"> Für die Rückgabe des Fahrrads können Sie das ausgeliehene Fahrrad hier anklicken. Die Preisabrechnung geschieht automatisch, solange Sie es an einem unserer Standorte abgegeben haben.</p>
	</div>

	<div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3 largeMargin2">
		<ul id="verlieheneRaeder">
		</ul>
	</div>

	<div class="textDiv">
		<p>Ihr gewünschtes Fahrrad ist nicht mehr verfügbar? Melden Sie
			sich bei uns! Wir geben unser Bestes und versuchen, weitere Fahrräder
			dieses Typs bereitzustellen.</p>
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
					<li><a class="text-muted" href="#">Unser Fahrradbestand</a></li>
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
	<script src="bestandupdate.js"></script>
	<script src="ausleihstorage.js"></script>
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
