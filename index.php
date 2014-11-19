<!DOCTYPE html>
<html>
<head lang="en">
	<meta charset="UTF-8">
	<link rel="stylesheet" href="src/public/assets/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="src/public/css/nivo-slider.css">
	<link rel="stylesheet" href="src/public/css/app.css">
	<title>Grafikart Portfolio Grille</title>
</head>
<body>

<!-- Header -->

<div class="navbar navbar-fixed-top navbar-inverse">
	<div class="container">
		<div class="navbar-header">
			<a href="#" class="navbar-brand">Portfolio</a>
		</div>
	</div>
</div>

<!-- Body -->

<div class="container">
	
	<?php for($j =1; $j <=3; $j++): ?>

	<div class="row">
		<?php for($i = 1; $i <= 4; $i++): ?>
			<article class="col-xs-3 work" id="realisation-<?= $j . '-' . $i ?>">
				<img src="http://lorempicsum.com/futurama/220/135/<?= $i; ?>" alt=""><br>
				<strong>Ma Réalisation <?= $j . '-' . $i ?></strong><br>
				<em>Wordpress</em>
					<div class="work_detail">
					<hr/>
					<div class="row">
						<div class="col-xs-8">
							<div class="work_slideshow" stagger8>
								<img src="http://lorempicsum.com/futurama/460/250/1">
								<img src="http://lorempicsum.com/futurama/460/250/2">
								<img src="http://lorempicsum.com/futurama/460/250/3">
							</div>
						</div>


						<div class="col-xs-4">
							<h2 class="stagger1">Mon projet <?= $j . '-' . $i ?></h2>
							<p class="stagger2"><em>Wordpress</em></p>
							<p class="stagger3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi assumenda odit, voluptas aperiam nam, ab doloremque exercitationem architecto, quo reiciendis omnis, excepturi dolorum magni facilis blanditiis laudantium porro autem a.</p>
						</div>
					</div>
					<hr/>
				</div>
			</article>
		<?php endfor; ?>
	</div>

	<div class="row-detail"></div>
	<?php endfor; ?>

</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="src/public/js/jquery.nivo.slider.pack.js"></script>
<script src="src/public/js/portfolio.js"></script>

</body>
</html>