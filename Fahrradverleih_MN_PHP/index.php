<?php
session_start();

if (! isset($_SESSION['username'])) {
    $_SESSION['msg'] = "Sie müssen sich zuerst einloggen!";
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
			<a class="py-2" href="#"><svg height="25" width="30" fill="white"
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
				</svg> </a> <a class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN">Home</a> <a
				class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/preise.html">Preise</a> <a
				class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/verleih.html">Verleih</a> <a
				class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/bestand.jsp">Bestand</a> <a
				class="py-2 d-none d-md-inline-block"
				href="http://localhost/Fahrradverleih_MN/kontakt.html">Kontakt</a> <a
				class="py-2 d-none d-md-inline-block" href="/index.php">Abmelden</a>
		</div>
	</nav>

	<div class="bgimg13 height500px">
		<div class="col-md-5 p-lg-5 mx-auto my-5">
			<h1 class="display-4 font-weight-normal">
				<p>
					Willkommen <strong><?php echo $_SESSION['username']; ?></strong>
				</p>
			</h1>
			<p class="lead font-weight-normal">Treten Sie der Welt des
				Bikesharing bei!</p>
			<a class="btn btn-outline-secondary"
				href="http://localhost/Fahrradverleih_MN/index.html">Zurück zu Home</a>
			<a class="btn btn-outline-secondary" href="index.php?logout='1'">Abmelden</a>
		</div>
	</div>


	<div class="content">
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="textDiv">
      	<?php
    function createImage()
    {
        $ausgabe = $_SESSION['success'];
        $db = mysqli_connect('localhost', 'root', '', 'fahrradverleih_mn');
        $sumquery = $db->prepare("SELECT SUM(anzahl) AS value_sum FROM verliehen");
        $sumquery->execute();
        $result = $sumquery->get_result();
        $sum = 0;
        while($row = $result->fetch_assoc()) {
          $sum += $row['value_sum'];
        }
        $summeverliehen = floatval($sum);
        $prozentverliehen = floatval((($summeverliehen/50) * 100));
        $stprozentverliehen = strval($prozentverliehen);
        $image = imagecreate(1450, 50);
        $background_color = imagecolorallocate($image, 51, 51, 51);
        $text_color = imagecolorallocate($image, 255, 255, 255);
        imagestring($image, 5, 155, 15, $ausgabe . " Leihe Dir dein Fahrrad schnell aus und beeile dich besser, schon " . $stprozentverliehen . "% unserer Fahrraeder sind verliehen!", $text_color);
        imagepng($image, "image.png");
        imagedestroy($image);
        unset($_SESSION['success']);
    }
    createImage();
    print "<img src=image.png?" . date("U") . ">";
    ?> 
      </div>
  	<?php endif ?>
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
